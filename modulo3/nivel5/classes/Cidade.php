<?php 

class Cidade {

    /**
     * Retorna uma lista de registro da DB
     * @param [int] $id
     * @return void
     */
    public static function all ($id){
                // $conn = mysqli_connect('127.0.0.1','root', '', 'famosos');
                $conn = new PDO("mysqli:host='127.0.0.1';user='root'; password='';dbname= 'famosos'");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                $result = $conn->query("SELECT * FROM cidade ORDER BY id'");
                return $result->fetchAll();
    }    
}

?>