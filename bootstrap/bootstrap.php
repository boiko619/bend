<?php


if(function_exists ('date_default_timezone_set')){// установка временной зоны
 date_default_timezone_set('Europe/Kiev');
}
ini_set("display_errors",1);// Вывод всех ошибок
error_reporting(E_ALL);
require_once realpath(__DIR__).'/../config/app.php';
require_once CORE.'connection.php';
require_once CORE.'Router.php';// Маршрут 