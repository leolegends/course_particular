<?php

namespace App\Http\Controllers;

use App\Traits\TestTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\ElementsController;

class TestController extends ElementsController
{

    use TestTrait; //? Essa trait é relaciada a test.

    public function Test()
    {

        $this->TestTraitmataCodigo();

        $this->setValue(100);
        
        $r = $this->calc("-", 5);
        
        dd($r);

        //? Forma de usar quando importamos a classe inteira. 

        // $elements = new ElementsController();

        // dd($elements->valor1(100));


        //! --------------------------------------

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

 
            $this->exibicaoDeDados($ocorrencias, $quantidade_de_ocorrencias);
                
            
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

    //? VOID = QUANDO NAO RETORNA NADA.
    //? FLOAT = QUANTO RETORNA NUMERO FLOAT EX: 25.90
    //? OBJECT = QUANDO RETORNA OBJETO.
    //? INT = QUANDO RETORNA UM NUMERO INTEIRO EX: 100;
    //? ARRAY = QUANDO RETORNA UM ARRAY.

    public function elementosExternos()
    {

    }
    

    public function exibicaoDeDados($ocorrencias, $quantidade_de_ocorrencias) : void
    {
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
    }
}
