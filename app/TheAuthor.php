<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheAuthor extends Model
{
    //
//     protected $fillable = [
//         'title',
//         'year',
//         'plot'
//         ];   

    protected $guarded = [
        'id'
    ];

}
