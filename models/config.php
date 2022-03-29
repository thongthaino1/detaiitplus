<?php
//define("DB_HOST","localhost");
define("DB_HOST","localhost");
define("DB_NAME","tech-s");
define("DB_USER","root");
define("DB_PWD","");

function getPOST($key)
{
    if(isset($_POST[$key]))
    {
        return $_POST[$key];
    }
    return  "";
}
function getGET($key)
{
    if(isset($_GET[$key]))
    {
        return $_GET[$key];
    }
    return  "";
}
function generateRandomString($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrs092u3tuvwxyzaskdhfhf9882323ABCDEFGHIJKLMNksadf9044OPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
