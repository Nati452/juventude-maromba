<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Treino extends Model
{
    use HasFactory;
    protected $table = 'treino';
    public $timestamps = false;

    public function series(): HasMany
    {
        return $this->hasMany(ExercicioTreino::class, "id_treino");
    }
}

