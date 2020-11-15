<?php

namespace App;
use \App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
        return $this->belongTo(User::class);
    }


    public function dameUsuario()
    {
      if($this->user_id){
        $usuarioNombre = User::find($this->user_id);
        return $usuarioNombre;
      }
      return 'Sin Nombre';
    }

}