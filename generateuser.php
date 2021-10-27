<?php

require_once('vendor/autoload.php');
require_once('vendor/fzaninotto/faker/src/autoload.php');


//use Facker;

$faker = Facker\Factory::create();

echo $faker->name;

?>