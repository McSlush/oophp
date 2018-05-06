<?php

include(__DIR__ . "/src/Person3.php");

$person = new Person3();

$person->setName("Muskel-Mos");

$person->setAge(42);

echo "{$person->getName()} is {$person->getAge()}";
