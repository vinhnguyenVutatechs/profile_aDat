<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolios extends Model
{
    protected $table = 'portfolio';
    protected $fillable = ['id_categoeries', 'name', 'img', 'video'];
    public $timestamps = true;

    /**
     * Get all of the comments for the Portfolio
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function CategoriesPortfolio()
    {
        return $this->belongsTo(Portfolio::class, 'id_categoeries', 'id');
    }
}
