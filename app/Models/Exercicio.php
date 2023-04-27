<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Exercicio extends Model
{
    protected $table = 'exercicio';
    public $timestamps = false;
    use HasFactory;

    public function estimulosMusculares(): HasMany
    {
        return $this->hasMany(EstimuloMuscular::class, "id_exercicio");
    }
    public function exerciciosTreinos(): HasMany
    {
        return $this->hasMany(ExercicioTreino::class, "id_exercicio");
    }
}

