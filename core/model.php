<?php

namespace App\Core;
class Model implements Imodel{
    protected static DataBase|null $database=null;//instance est nulle

    protected static string $table;
    public static function database():DataBase{
        //Singleton=> Gain de Memoire
        if(self::$database==null){
            self::$database=new DataBase;
        }
        return self::$database;
        
    }

    public function insert(){

    }
    public function update(){

    }
    public static function selectAll(){
        $sql="select *  from ".self::$table;
        return self::database()->executeUpdate($sql);
    }
    public static function delete(int $id){
        $sql="delete  from ".self::$table." where id=$id";
        return self::database()->executeSelect($sql);
    }
    public static function selectById(int $id){
        $sql="select *  from ".self::$table." where id=$id";
        return self::database()->executeSelect($sql,[$id]);
    }
    public static function selectWhere(string $sql,array $data=[],$single=false){
        return self::database()->executeSelect($sql,$data,$single);
    } 

}