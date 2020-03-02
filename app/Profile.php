<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
        'account_id',
        'gender',
        'birthdate',
        'description',
        'contactnumber',
        'address',
    ];
}
