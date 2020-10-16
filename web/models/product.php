<?php 


class Product {
    public function getAll(){
        $db = Database::init();
        return $db.connect()->query('Select * From Product');
    }

    public function addBasket($params){
        $db = Database::init();
        $db.connect()->query('Select * From Product');
    }
}


?>