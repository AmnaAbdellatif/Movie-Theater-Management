<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Films extends Model
{
    protected $fillable = [
        'name','realisateur','duree','categorie','image'
    ];
}
