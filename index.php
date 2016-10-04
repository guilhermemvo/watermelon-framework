<?php
//hacktoberfest 2016
include_once './library/configure.php';
include_once './library/autoload.php';
include_once './view/templates/default/commons/top.php';




if (!empty($_GET['class'])) {

    $class = $_GET['class'] . 'Controller';
    $class = new $class();

    if ($_GET['function']) {

        $function = $_GET['function'];
        $class->$function();
    }
} else {

    include './view/templates/default/index.html';
}

include './view/templates/default/commons/bottom.php';
