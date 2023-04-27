<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EstimuloMuscular extends Model
{
    use HasFactory;
    protected $table = 'estimulo_muscular';
    public $timestamps = false;

    public function musculo(): BelongsTo
    {
        return $this->belongsTo(Exercicio::class, 'id_musculo');
    }

    public function exercicio():BelongsTo
    {
        return $this->belongsTo(Musculo::class, 'id_exercicio');
    }

}
