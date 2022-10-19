<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("yan");
var_dump($company);

$company->programmer = new BackendProgrammer("yan");
var_dump($company);

$company->programmer = new FrontendProgrammer("yan");
var_dump($company);

sayHelloProgrammer(new Programmer("yan"));
sayHelloProgrammer(new BackendProgrammer("yan"));
sayHelloProgrammer(new FrontendProgrammer("yan"));