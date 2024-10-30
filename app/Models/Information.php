<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'informations';
    protected $fillable = [
        'name',
        'address',
        'email',
        'contact',
        'objective',
        'tertiary',
        'tersy',
        'secondary1',
        'secsy1',
        'secondary2',
        'secsy2',
        'primary',
        'prisy',
        'birthdate',
        'age',
        'placeofbirth',
        'gender',
        'religion',
        'nationality',
        'civilstatus',
        'signature',
    ];
}
