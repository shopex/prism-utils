<?php
require_once(__DIR__ . '/../../../vendor/autoload.php');

$prismUrl = 'http://localhost:8080';
$adminKey = "wvaxmnjm";
$adminSecret = "5med5cp5o5gyvv4plg5x";
$params = array(
    'Id'=>'jxj2pzxz',
    'key'=>'token',
    'value'=>'fewfewfew'
);
$adminUserManager = new PrismLibDeveloperApiManager($prismUrl, $adminKey, $adminSecret);
$return = $adminUserManager->get($params);
print_r($return);



