<?php

    /* Funcion que va a devolver las primeras (X) palabras de un parrafo
        Argumentos:
        $texto = este es el parrafo a reducir
        $cantidad = cantidad de palabras a extraer


        tiene que devolver un string con la cantidad de palabras seleccionada
    */

    function recortar_palabras(string $texto,  int $cantidad) : string{
        //Dividir el texto en palabras
        $palabras = explode(" ", $texto);

        //Si la cantidad de palabras es menor o igual a la deseada, retorna el texto original
        if(count($palabras) <= $cantidad){
            return $texto;
        }

        //Recortar el texto y unirlo de nuevo

        return implode(" ", array_slice($palabras, 0 , $cantidad)) . "..." ;
    }
?>