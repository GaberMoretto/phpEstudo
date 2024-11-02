<?php 

class Cidade {

    /**
     * Retorna uma lista de registro da DB
     */
    public static function all (){
                $conn = new PDO("mysql:host=127.0.0.1;dbname=famosos", 'root', '');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                $result = $conn->query("SELECT * FROM cidade ORDER BY id");
                return $result->fetchAll();
    }    
}

?>