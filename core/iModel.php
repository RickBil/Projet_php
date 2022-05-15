<?php

namespace App\Core;
interface Imodel
{
    public function insert();
    public function update();
    public static function selectAll();
    public static function delete(int $id);
    public static function selectById(int $id);
    public static function selectWhere(string $sql,array $data=[],$single=false);
}
