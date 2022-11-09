<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacao = $_POST['operacao'];

switch ($operacao){
    case 'soma':
        $resultado = $numero1+$numero2;
        break;

    case 'subtracao':
        $resultado = $numero1-$numero2;
        break;

    case 'multiplicacao':
        $resultado = $numero1*$numero2;
        break;
        case 'divisao':
                if($numero2==0){
                    $resultado = 'não é possivel dividir por zero';
                } else {
                $resultado = $numero1/$numero2;
                }
        break;

    default:
        $resultado= "operacao inválida";
    }

            

/*
if($operacao == "soma"){
    $resultado = $numero1+$numero2;
} else {
    if($operacao == "subtracao"){
        $resultado = $numero1-$numero2;
    } else {
        if($operacao == 'multiplicacao'){
            $resultado = $numero1*$numero2;
        } else {
            if($operacao == 'divisao'){
                if($numero2==0){
                    $resultado = 'não é possivel dividir por zero';
                } else {
                $resultado = $numero1/$numero2;
                }
            } else {
                echo 'operação inválida';
            }
        }
    }
}
*/
echo 'Total:'.$resultado;
