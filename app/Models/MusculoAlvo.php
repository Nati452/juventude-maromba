<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class MusculoAlvo extends Model
{
    use HasFactory;
    protected $table = 'musculo_alvo';
    public $timestamps = false;

    public function exercicios(): Collection
    {
        $idsExercicios = DB::table('estimulo_muscular')->where('id_musculo', $this->id)->get()->pluck('id_exercicio')->toArray();
        return DB::table('exercicio')->whereIn('id', $idsExercicios)->get();
    }

    public function estimulosMusculares(): HasMany
    {
        return $this->hasMany(EstimuloMuscular::class, "id_exercicio");
    }
}

