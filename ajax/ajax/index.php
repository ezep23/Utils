<?php 
    
    header('Content-Type: text/html; charset=utf-8');

    if(!isset($_REQUEST['cod'])){
        echo "¡Selecciona un cliente!";
    } else {
                    
        $codigo = (int) $_REQUEST['cod'];

        $resultado = match ($codigo) {
            1 => "Pedro",
            2 => "José",
            3 => "Ignacio",
            4 => "Matias",
            5 => "Julian",
            default => "No existe el cliente"
        };

        echo $resultado . " es el mejor cliente";
    }

?>