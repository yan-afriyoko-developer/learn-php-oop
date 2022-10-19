<?php

require_once "data/Person.php";

$yan = new Person("yan", "Subang");
$yan->name = "yan";
$yan->sayHello("Budi");

$joko = new Person("Joko", "Cirebon");
$joko->name = "Joko";
$joko->sayHello(null);

$yan->info();
$joko->info();