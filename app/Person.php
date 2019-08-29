<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{   
    use SoftDeletes;

    protected $table = 'person';

    protected $fillable = [
        'cpf_cnpj', 'name', 'rg',
        'sex', 'datebirth_or_foundation', 'corporate_name',
        'fantasy_name', 'state_registration', 'status', 'class',
    ];

    public function scopeName($query, $keyword = null)
    {
        if (! is_null($keyword)) {
            $query->where(function($q) use($keyword) {
                $q->where('name', 'like', '%'.$keyword.'%');
                $q->orWhere('corporate_name', 'like', '%'.$keyword.'%');
            });
        }
    }

    public function scopeCpfcnpj($query, $keyword = null)
    {
        if (! is_null($keyword)) {
            $query->where(function($q) use($keyword) {
                $q->where('cpf_cnpj', '=', $keyword);
            });
        }
    }

}
