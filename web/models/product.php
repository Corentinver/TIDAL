<?php 


class Product {
    public function getAll(){
        $db = Database::init();
        return $db->connect()->query('Select * From Products');
    }

    public function getProductById($id){
        $db = Database::init();
        $query = $db->connect()->prepare("SELECT `*` FROM `Products` WHERE id=:id");
        $query->bindParam(":id",$id);
        $query->execute();
        return $query;
    }

    public function addBasket(){
        var_dump('toto');
    }
}


?>