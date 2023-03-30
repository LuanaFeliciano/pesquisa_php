<?php

$mac_address = MAC('00:11:22:33:44:55');
echo "'Hello',\World'\ <br> <br>";
echo $str = SANITIZE_ADD_SLASHES("'Hello',\World'\ <br>");

function MAC($mac){
    //00:11:22:33:44:55
    //validar endereços MAC no formato "00:11:22:33:44:55".
    if (filter_var($mac, FILTER_VALIDATE_MAC)) {
        return "O endereço MAC $mac é válido.";
    } else {
        return "O endereço MAC $mac não é válido.";
    }
}



function SANITIZE_ADD_SLASHES($string){
    //adiciona barras invertidas antes de caracteres especiais
    //"O'Reilly"
    return filter_var($string, FILTER_SANITIZE_ADD_SLASHES);
}