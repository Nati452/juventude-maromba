<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MusculoAlvo extends Model
{
    use HasFactory;
    protected $table = 'musculo_alvo';
    public $timestamps = false;

    public function estimulosMusculares(): HasMany
    {
        return $this->hasMany(EstimuloMuscular::class, "id_exercicio");
    }
}

