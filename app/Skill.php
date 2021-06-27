<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skill';
    protected $fillable = ['key_name', 'value_name'];
    public $timestamps = true;
}
