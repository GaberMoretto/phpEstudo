<?php 

class Pessoa {

    /**
     * Busca registro da base de dados
     * @param [int] $id
     * @return void
     */
    public static function find ($id){
        // $conn = mysqli_connect('127.0.0.1','root', '', 'famosos');
        $conn = new PDO("mysqli:host='127.0.0.1';user='root'; password='';dbname= 'famosos'");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $result = $conn->query("SELECT * FROM pessoa WHERE id = '{$id}'");
        return $result->fetch();
    }
    /**
     * Deleta registro
     * @param [int] $id
     * @return void
     */
    public static function delete ($id){
        $conn = new PDO("mysql:host=127.0.0.1;dbname=famosos", 'root', '');
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $result = $conn->query("DELETE FROM pessoa WHERE id = '{$id}'");
        return $result->fetch();
    }
    /**
     * Retorna uma lista de registro da DB
     * @return void
     */
    public static function all (){
                $conn = new PDO("mysql:host=127.0.0.1;dbname=famosos", 'root', '');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                $result = $conn->query("SELECT * FROM pessoa ORDER BY id");
                return $result->fetchAll(PDO::FETCH_ASSOC); //Retorna um array associativo
    }
    /**
     * aramazena os dados da pessoa na base de dados
     * @param [string] $pessoa
     * @return void
     */
    public static function save ($pessoa){
        $conn = new PDO("mysqli:host='127.0.0.1';user='root'; password='';dbname= 'famosos'");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //caso vazio realiza insert
        if (empty($pessoa['id'])){
            $result = $conn->query("SELECT max(id) as next FROm pessoa");
            $row = $result->fetch();
            $pessoa['id'] = (int) $row['next'] + 1;

            $sql = "INSERT INTO pessoa (id, nome, endereco, bairro, telefone,
                                        email, id_cidade)
                    VALUES ( '{$pessoa['id']}', '{$pessoa['nome']}', '{$pessoa['endereco']}',
                        '{$pessoa['bairro']}', '{$pessoa['telefone']}', '{$pessoa['email']}', '{$pessoa['id_cidade']}')";

        }
        //realiza update
        else {
            $sql = "UPDATE pessoa SET nome = '{$pessoa['nome']}', endereco = '{$pessoa['endereco']}',
                                                bairro = '{$pessoa['bairro']}',
                                                telefone = '{$pessoa['telefone']}',
                                                email = '{$pessoa['email']}',
                                                id_cidade = '{$pessoa['id_cidade']}'
                        WHERE id = '{$pessoa['id']}'";
        }
        return $conn->query($sql);
    }
    
}

?>