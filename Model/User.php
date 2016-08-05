<?php
/**
 * Created by PhpStorm.
 * User: godun
 * Date: 04.08.2016
 * Time: 12:34
 */

namespace Model;

use App\DB;
use App\MainModel;

class User extends MainModel
{
    const TABLE = 'users';

    public $login;
    public $pass;
    public $email;
    public $group = 2;

//    static $fields = ["`login`,`password`,`email`,`group`"];
//    static $values = [];

//    public function __construct($login,$password,$email,$group){
//        self::$values = func_get_args();
//    }

    public function addUser(){
        $dbh = DB::getInstance();
        $sql = "INSERT INTO ".self::TABLE."(login,password,email,groups) VALUES ('". $this->login ."','" .$this->pass  ."','". $this->email ."','". $this->group."')";
        $dbh->execute($sql);
    }
}