<?php

$matches = [];
$result = preg_match_all("/yan|awan|edy/i", "yan Afriyoko Developer", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu ANJING dan BANGSAT!");

var_dump($result);

$result = preg_split("/[\s,-]/", "yan Afriyoko Developer,Programmer,Zaman-Now");

var_dump($result);