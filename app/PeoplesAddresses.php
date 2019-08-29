<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PeoplesAddresses extends Model
{
    use SoftDeletes;

    protected $table = 'people_addresses';

    protected $fillable = [
        'id_people', 'addresses', 'number',
        'cep', 'neighborhood', 'city',
        'state'
    ];
}
