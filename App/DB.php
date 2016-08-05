<?php
/**
 * Created by PhpStorm.
 * User: godun
 * Date: 04.08.2016
 * Time: 11:37
 */

namespace App;


class DB
{
    public $dbh;
    static $_instance;

    public function __construct(){
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=taskmgdb','root','');
        $this->dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING );
        if($this->dbh){
            echo 'Пацаны ваще ребята';
        }
    }

    //execute method that indicate status of query
    public function execute($sql){
        $query = $this->dbh->prepare($sql);
        $query->execute();
        return $query->errorInfo();
    }

    public function query($sql){
        $query = $this->dbh->prepare($sql);
        if(false !== $query->execute()){//will be true or false
            return $query->fetchAll(\PDO::FETCH_ASSOC);
        }
    }
    public static function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

}