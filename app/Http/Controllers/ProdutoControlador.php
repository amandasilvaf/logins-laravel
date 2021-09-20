<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        echo "<h4>Lista de Produtos:</h4>";
        echo "<ul>";
        echo  "<li>roduto 1</li>";
        echo "<li>Produto 2</li>";
        echo "</ul>";
    }
}
