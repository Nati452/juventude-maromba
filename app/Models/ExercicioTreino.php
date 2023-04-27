<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class ExercicioTreino extends Model
{
    use HasFactory;
    protected $table = 'exercicio_treino';
    public $timestamps = false;

    public function treino():BelongsTo
    {
        return $this->belongsTo(Treino::class, 'id_treino');
    }

    public function exercicio():BelongsTo
    {
        return $this->belongsTo(Exercicio::class, 'id_exercicio');
    }

}
