<?php
/**
 * Created by PhpStorm.
 * User: godun
 * Date: 04.08.2016
 * Time: 10:51
 */


require 'vendor/autoload.php';
require __DIR__.'/autoload.php';

$dbh = \App\DB::getInstance();

//$dbh = new \App\DB();




//$user = new \Model\User($name,'1234','"bestemailcom.ua"','2');
//\Model\User::insert();
$newUser = new \Model\User();
$newUser->login = 'alfa';
$newUser->pass = 'qwetry';
$newUser->email = 'q123@ru.tu';
$newUser->group = '3';
$newUser->addUser();


$users = \Model\User::getAll();

ddd($users);
