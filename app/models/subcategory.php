<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    //
    public $timestamp = true;
    protected $table = "sub_categories";
    protected $primarykey = 'id';
    protected $fillable = [
        'category_id', 'description'
    ];

    public function category(){
        return $this->hasOne('App\Category', 'id', 'category_id');
    }

}
