<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bakery extends Model
{
    protected $gourded = [];

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin');
    }
}
