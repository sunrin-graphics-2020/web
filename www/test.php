<?php 
chdir(dirname(__FILE__));
require './flight/Flight.php';
Flight::route('/', function(){
    echo 'hello world!';
});
Flight::start();
?>