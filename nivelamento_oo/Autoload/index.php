<?php

function loadFiles($className)
{
    require_once($className . '.php');
}

spl_autoload_register('loadFiles');

$maria = new Diarista;

var_dump($maria);