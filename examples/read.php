<?php

require __DIR__."../vendor/autoload.php";

//use CoffeeCode\DataLayer\Connect;
//
//$conn = Connect::getInstance();
//$error = Connect::getError();
//
//if($error){
//    echo $error->getMessage();
//    die();
//}
//
//$query = $conn->query("SELECT * FROM users");
//
//var_dump($query->fetchAll());


use Source\Models\User;

$user = new User();

$list = $user->find()->fetch(true);

/** @var $item User */
foreach($list as $item){
    var_dump($item->data());
    foreach($item->addresses() as $address){
        var_dump($address->data());
    }
}