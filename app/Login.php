<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table='login';

    

    protected $fillable = ['nombres', 'apellidos', 'telefono','correo','password','confirmpass'];

    public $timestamps = false;

}
