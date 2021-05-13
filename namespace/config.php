<?php

spl_autoload_register(function ($nameclass) {

    $dirClass = "class";
    $fileName = $dirClass . DIRECTORY_SEPARATOR . $nameclass . ".php";

    if(file_exists($fileName)) {

        require_once($fileName);
    }
    
});

?>