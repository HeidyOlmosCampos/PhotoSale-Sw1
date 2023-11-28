<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventoCliente extends Model
{
    use HasFactory;
    protected $table = 'eventosclientes';
    protected $primaryKey = 'id_evento_cliente';
    protected $fillable = [
        'fecha', 'id_cliente', 'id_evento'
    ];
}
