<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;
    use HasFactory; 
    protected $fillable = [
        'materia',
        'descricao',
        'horario',
        'professor',
        'user_id',
    ]; 

    public function owner() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
