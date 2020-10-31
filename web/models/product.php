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
        var_dump($query->execute());
        return $db->connect()->prepare("SELECT `*` FROM `Products` WHERE `id=$id`");
    }

    public function addBasket($params){
        $db = Database::init();
        $db.connect()->query('Select * From Product');
    }
}


?>