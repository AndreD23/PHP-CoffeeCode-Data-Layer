<?php

require __DIR__."../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findById(1);
$user->first_name = "André";
$user->save();


