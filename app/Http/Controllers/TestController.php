<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Test()
    {
        $test = [
            'nome' => "Leonardo | Yuri",
            'sobrenome' => "Cainã",
            'idade' => 30
            
            ];

            $idade = $test['idade'];
            $nome = $test['nome'];


            $ocorrencias = [
                "",                
                "ERRO",
                "CHAMADO",
                "RECLAMACAO",
                "FINANCEIRO"
                ];

                foreach($ocorrencias as $ocorrencia){
                    echo $ocorrencia . "<br>";     
                    }
                   

       //dd($ocorrencias[0]);
    }
}
