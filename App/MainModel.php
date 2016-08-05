<?php

/**
 * Created by PhpStorm.
 * User: godun
 * Date: 04.08.2016
 * Time: 12:54
 */


namespace App;


abstract class MainModel
{

    const TABLE = '';

    public static function getAll(){
        $dbh = DB::getInstance();
        $sql = 'SELECT * FROM '.static::TABLE;
        return $dbh->query($sql);
    }

    public static function getOne($id){
        $dbh = DB::getInstance();
        $sql = 'SELECT * FROM '.static::TABLE.' WHERE id='.$id;
        return $dbh->query($sql);
    }
    public static function deleteOne($id){
        $dbh = DB::getInstance();
        $sql = 'DELETE FROM '.static::TABLE.' WHERE id='.$id;
        return $dbh->execute($sql);
    }
    public static function insert(){
        $dbh = DB::getInstance();
        $sql = 'INSERT INTO ' . static::TABLE . ' ('. implode(',',static::$fields). ') VALUES (' . implode(',',static::$values) . ')';
        return $dbh->execute($sql);
    }

    public static function update(){
        $dbh = DB::getInstance();

    }
}