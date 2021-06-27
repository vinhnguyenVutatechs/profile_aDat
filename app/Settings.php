<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'settings';
    protected $fillable = ['slug_settings', 'name_settings'];
    public $timestamps = true;
}
