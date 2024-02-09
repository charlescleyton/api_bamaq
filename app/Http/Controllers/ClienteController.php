<?php

namespace App\Http\Controllers;

use App\Models\clientes;

class ClienteController extends Controller
{
    public function getCliente () {
       return clientes::orderBy("created_at","desc")
       ->get();
    }
}
