<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeoplesPhone extends Model
{
    use SoftDeletes;

    protected $table = 'people_phone';

    protected $fillable = [
        'id_people', 'phone'
    ];
}
