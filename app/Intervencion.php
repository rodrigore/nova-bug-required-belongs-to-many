<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intervencion extends Model
{
    protected $table = 'intervenciones';

    protected $fillable = [
        'name',
    ];

    public function problema()
    {
        return $this->belongsToMany(
            Problema::class,
            'intervenciones_problemas',
            'intervencion_id',
            'problema_id'
        );
    }
}

