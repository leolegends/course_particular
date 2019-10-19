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
                "ERRO",
                "CHAMADO",
                "RECLAMACAO",
                "FINANCEIRO"
                ];

            //todo: aumenta letras CAṔSLOCK
            //strtoupper("string");

            //todo: diminui as letras 
            //strtolower("STRING");

            $quantidade_de_ocorrencias = count($ocorrencias);

             $a = 0;

                while($a < $quantidade_de_ocorrencias){
                    // var_dump($a);
                    
                    if($ocorrencias[$a] == "ERRO"){
                        $ocorrencias[$a] = "FALHA";
                    }else{
                        $ocorrencias[$a] = "--------";
                    }
                    
                    var_dump($ocorrencias[$a]);
                   
                    if($a > 0){
                        echo "Ainda existe dados. </br>";
                    }else{
                        echo "Nao existem dados. </br>";
                    }
                    
                    $a++;
                }    

                



                //TODO: Foreach, For, While. 

                //? While
                //TODO: While significa Enquanto;

                // $a = 0;

                // while($a < $quantidade_de_ocorrencias){
                //     // var_dump($a);
                //     var_dump($ocorrencias[$a]);
                //     $a++;
                // }

                //? For
               //*      1      2       3
                // for($i = $quantidade_de_ocorrencias - 1; $i >= 0; $i--){
                //     var_dump($ocorrencias[$i]);
                //     // var_dump($i);
                // }


                //? Foreach
                // foreach($ocorrencias as $ocorrencia){
                //     // echo $ocorrencia . "<br>";
                //     var_dump($ocorrencia);     
                // }
                   

       //dd($ocorrencias[0]);
    }
}
