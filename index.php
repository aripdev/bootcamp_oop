<?php

use App\Person;
use App\Police;

require "vendor/autoload.php";

$jane=new Person(25);

$jane->setName("Jane Doe");

$officer_jane=new Police();

$officer_jane->addOfficer($jane);

$officer_jane->getOfficerName();

echo PHP_EOL;

$officer_jane->getOfficerAge();
