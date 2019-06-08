<?php

define("ABSOLUTE_PATH", $_SERVER["DOCUMENT_ROOT"]."/blockbuster");
// echo ABSOLUTE_PATH;
define("ENV", ABSOLUTE_PATH."/config/.env");
define("LOG", ABSOLUTE_PATH."/data/log.txt");

define("SERVER", env("SERVER"));
define("DATABASE", env("DATABASE"));
define("USERNAME", env("USERNAME"));
define("PASSWORD", env("PASSWORD"));

function env($naziv){
    $podaci = file(ENV);
    $vrednost = "";
    foreach($podaci as $key=>$value){
        $konfig = explode("=", $value);
        if($konfig[0]==$naziv){
            $vrednost = trim($konfig[1]);
        }
    }
    return $vrednost;
}