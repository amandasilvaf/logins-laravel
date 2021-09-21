<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartamentoControlador extends Controller
{
    
    public function index()
    {
        echo "<h4>Lista de Dptos:</h4>";
        echo "<ul>";
        echo "<li>Roupas</li>";
        echo  "<li>Eletrônicos</li>";
        echo "<li>Casa e Conforto</li>";
        echo "</ul>";
        echo "<hr>";

        if(Auth::check()){
            echo "Usuário logado";
            $user = Auth::user();
            echo "<h4>Usuário: " . $user->name . "</h4>";
            echo "<h4>Email: " . $user->email . "</h4>";
            echo "<h4>ID: " . $user->id . "</h4>";
        }else{
            echo "Usuário não logado.";
        }
        
    }

}
