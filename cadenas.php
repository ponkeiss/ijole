<?php
    // Contar los caracteres de una cadena.
    function ctr_char($c) {
        return strlen($c);
    }
    // Convertir una cadena a mayúsculas.
    function cvrt_mayus($c) {
        return strtoupper($c);
    }
    // Convertir una cadena a minúsculas.
     function cvrt_minus($c) {
        return strtolower($c);
    }
    // Invertir una cadena.
    function invert_c($c) {
        return strrev($c);
    }
    // Determinar si una palabra es palíndromo.
    function palindromo($c) {
        $c = strtolower($c);
        if ($c == strrev($c)) {
            return true;
        } else {
            return false;
        }
    }
    // Contar cuántas vocales contiene una cadena.
    function cnt_vocals($c) {
        $c = strtolower($c);
        $cnt = preg_match_all('/[aeiouáéíóú]/i', $c);
        return $cnt;    
    }
?>