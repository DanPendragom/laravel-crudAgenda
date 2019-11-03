<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function register(){
        $servidor = 'localhost';
        $usuario = 'admin';
        $senha = '123*';
        $banco = 'db_agenda';
        
        // Conecta-se ao banco de dados MySQL
        $mysqli = new mysqli($servidor, $usuario, $senha, $banco);
        // Caso algo tenha dado errado, exibe uma mensagem de erro
        
        if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
        
        
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $telefone = $_GET['telefone'];
        $social = $_GET['social'];
        
        
    }
}
