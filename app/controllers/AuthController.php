<?php

class AuthController extends \BaseController
{

    public function postLogin()
    {
        $credentials = [
            'email' => Input::get('email'),
            'password' => Input::get('password')
        ];
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];

        //validating the credentials.
        $validator = Validator::make($credentials, $rules);

        //in case the credentials are valid. Try to login the user.
        if ($validator->passes()) {
            if (Auth::attempt($credentials)) {
                //if successfull redirect the user
                return Redirect::back();
            }
            //else send back the login failure message.
            return Redirect::back()->withInput()->with('failure', 'username or password is invalid!');
        }
        //send back the validation errors.
        return Redirect::back()->withErrors($validator)->withInput();
    }


    public function getLogout()
    {
        Auth::logout();
        return Redirect::to('/');
    }

    public function postRegister()
    {

    }
}
