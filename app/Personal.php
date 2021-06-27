<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'personal';
    protected $fillable = ['name', 'img', 'slug'];
    public $timestamps = false;
}
