<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class operador extends Model
{
    use HasFactory;

    //al modelo operador, le creo una relacion que indica que este objeto pertenece a el user id de la sesion activa.

    public function supervisor(){
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
