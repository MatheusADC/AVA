<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseBatch extends Model
{
    // Indicar o nome da tabela
    protected $table = 'course_batches';

    // Indicar quais colunas podem ser manipuladas
    protected $fillable = ['name'];

    // Criar relacionamento entre um e muitos
    public function course() {
        return $this->belongsTo(Course::class);
    }
}
