<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password'];
    public $timestamps = true;

    /**
     * Get all of the comments for the Users
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Blog()
    {
        return $this->hasMany(Blog::class, 'id_users', 'id');
    }
}
