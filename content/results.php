<?php
require_once '../config/config.php';
spl_autoload_register(function ($class) {
    include_once '../classes/' . $class . '.php';
});

if (isset($_GET['q'])) {
    ResultHandler::getResults($config, $_GET['q']);
}
?>