<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FunFacts extends Model
{
    protected $table = 'fun_facts';
    protected $fillable = ['key', 'value'];
    public $timestamps = false;
}
