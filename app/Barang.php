<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $table = 'classifieds';
    protected $fillable =['name', 'remarks'];
    protected $hidden = [];

    
}
