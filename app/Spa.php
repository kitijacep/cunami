<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spa extends Model
{
    protected $fillable = [
        'name',
        'breed',
        'birthday',
        'gender',
        'sterilised',
        'weight',
        'month',
        'year',
        'holder'
    ];

    protected $hidden = [
        'number',
        'cvc'
    ];

    /**
     *
     * @var array
     */
    protected $table = 'pets';
}
