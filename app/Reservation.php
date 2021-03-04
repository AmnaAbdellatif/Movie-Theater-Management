<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Reservation extends Model
{
    protected $fillable = [
        'name','username','date','time','salle','quantity','quantityS','total'
    ];
}
