<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problema extends Model
{
    protected $table = 'problemas';

    protected $fillable = [
        'name',
    ];

    public function intervenciones()
    {
        return $this->belongsToMany(
            Intervencion::class,
            'intervenciones_problemas',
            'problema_id',
            'intervencion_id'
        );
    }

    // I need to use this method to fix nova
    public function intervencions()
    {
        return $this->intervenciones();
    }
}

