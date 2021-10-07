<?php

namespace App\Models;

use Core\Database;

class Cliente{
    private $table = 'cliente';


    public function getAll(): array
    {
        $db = Database::getInstance();
        return $db->getList($this->table,"*")
    }
   

    public function getBy($condition)
    {
        $db = DataBase::getinstance();
        


        return $db->getList($this->table,"*")
    }
}




?>