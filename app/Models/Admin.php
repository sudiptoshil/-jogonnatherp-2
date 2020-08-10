<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $guarded=[];
    public function bookstall()
    {
        return $this->hasMany('App\Models\Bookstall','id');

    }

    public function bakery()
    {
        return $this->hasMany('App\Models\Bakery','id');

    }
}
