<?php

$a = "(3 + 4) * 2";
$b = "(5 + 3) * (3 - 1)";
$c = "(5 + 3 * (3 - 1)";

$operaciones = [$a,$b,$c];


function VerificarParentesis($operaciones){
    $pila = [];
    $longitud = strlen($operaciones); 

    foreach($operaciones as $operacion){
        for($i = 0; $i< $longitud ; $i++){
            $caracter = $operacion[$i];
            if ($caracter == '('){
                array_push($pila, $caracter);
            } else if ($caracter == ')'){
                if (empty($pila)){
                    return "Incorrecto";
                }
                array_pop($pila);
            }
        }   
    }

    return empty($pila) ? "Correcto" : "Incorrecto";

}

foreach($operaciones as $operacion)
    $resultado = VerificarParentesis($operacion);
    echo $resultado . "<br>";


?>
