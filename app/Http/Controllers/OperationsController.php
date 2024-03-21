<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationsController extends Controller
{
    private $operation;
    private $num1;
    private $num2;

    public function show($operation, $num1, $num2){
        $this->operation = $operation;
        $this->num1 = $num1;
        $this->num2 = $num2;

        $result = $this->getResult();
        return view('showResult', ['result'=>$result, 'operation'=>$operation]);
    }

    private function getResult(){
        switch($this->operation){
            case 'soma':
                $sum = $this->num1 + $this->num2;
                return "A soma entre $this->num1 e $this->num2 tem como resultado: $sum";
            case 'subtracao':
                $sub = $this->num1 - $this->num2;
                return "A subtração entre $this->num1 e $this->num2 tem como resultado: $sub";
            case 'multiplicacao':
                $multi = $this->num1 * $this->num2;
                return "A multiplicação entre $this->num1 e $this->num2 tem como resultado: $multi";
            case 'divisao':
                if($this->num2 != 0){
                    $division = $this->num1 / $this->num2;
                    return "A divisão entre $this->num1 e $this->num2 tem como resultado: $division";
                }else{
                    return 'Erro! Divisão por zero.';
                }
            default:
                return 'Operação Inválida';
        }
    }
}
