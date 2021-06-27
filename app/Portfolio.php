<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'categories_portfolio';
    protected $fillable = ['slug', 'name'];

    /**
     * Get all of the comments for the Portfolio
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Portfolios()
    {
        return $this->hasMany(Portfolios::class, 'id_categoeries', 'id');
    }
}
