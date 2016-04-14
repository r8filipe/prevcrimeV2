<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $timestamp = true;
    protected $table = "categories";
    protected $primarykey = 'id';
    protected $fillable = [
        'description', 'icon'
    ];

    public function sub_category()
    {
        return $this->hasMany('App\Subcategory', 'category_id', 'id');
    }
}
