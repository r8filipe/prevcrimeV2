<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    public $timestamp = true;
    protected $table = "events";
    protected $primarykey = 'id';
    protected $fillable = [
        'lat', 'long', 'sub_category_id', 'local_type_id', 'address', 'created_at'
    ];

    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory', 'sub_category_id', 'id');
    }

    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'sub_category_id');
    }

    public function localtype()
    {
        return $this->hasOne('App\Localtype', 'id', 'local_type_id');
    }

}
