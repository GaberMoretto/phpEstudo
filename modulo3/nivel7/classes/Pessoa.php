<?php 

class Pessoa {
   
    private static $conn; 
   /**
    * Realiza a abertura da conexao utilizando o tipo private
    * para manter o valor, e realiza uma validaçao para nao abrir
    * a conexao mais de uma vez.
    */
    public static function getConnection(){
        if (empty(self::$conn)) 
        {   
            $ini = parse_ini_file('C:/xampp/htdocs/php_oo/CursoPablo/modulo3/nivel6/config/famosos.ini');            
            if ($ini === false) {
                throw new Exception("Arquivo de configuração não encontrado.");
            }
            $host = $ini ['host'];
            $name = $ini ['name'];
            $user = $ini ['user'];
            $pass = $ini ['pass'];
            self::$conn = new PDO("mysql:host={$host};dbname={$name}", $user, $pass);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$conn;
        var_dump(self::$conn);die;
    }
    /**
     * Busca registro da base de dados
     * @param [int] $id
     * @return void
     */
    public static function find ($id){
        $conn = self::getConnection();
    
        $result = $conn->prepare("SELECT * FROM pessoa WHERE id = :id");
        $result->execute([':id' => $id]);
        return $result->fetch();
    }
    /**
     * Deleta registro
     * @param [int] $id
     * @return void
     */
    public static function delete ($id){
        $conn = self::getConnection();
        $result = $conn->prepare("DELETE FROM pessoa WHERE id = :id");
        $result->execute([':id' => $id]);
        return $result->fetch();
    }
    /**
     * Retorna uma lista de registro da DB
     * @return void
     */
    public static function all (){
        $conn = self::getConnection();
            
        $result = $conn->query("SELECT * FROM pessoa ORDER BY id");
        return $result->fetchAll(PDO::FETCH_ASSOC); //Retorna um array associativo
    }
    /**
     * aramazena os dados da pessoa na base de dados
     * @param [string] $pessoa
     * @return void
     */
    public static function save ($pessoa){
        $conn = self::getConnection();
        //caso vazio realiza insert
        if (empty($pessoa['id'])){
            $result = $conn->query("SELECT max(id) as next FROm pessoa");
            $row = $result->fetch();
            $pessoa['id'] = (int) $row['next'] + 1;

            $sql = "INSERT INTO pessoa (id, nome, endereco, bairro, telefone,
                                        email, id_cidade)
                    VALUES ( :id, :nome, :endereco,
                        :bairro, :telefone, :email, :id_cidade)";
        }
        //realiza update
        else {
            $sql = "UPDATE pessoa SET nome = :nome, 
                                      endereco = :endereco,
                                      bairro = :bairro,
                                      telefone = :telefone,
                                      email = :email,
                                      id_cidade = :id_cidade
                        WHERE id = :id";
        }
        $result =  $conn->prepare($sql);
        $result->execute(['id' => $pessoa['id'],
                         'nome' => $pessoa['nome'],
                         'endereco' => $pessoa['endereco'],
                         'bairro' => $pessoa['bairro'],
                         'telefone' => $pessoa['telefone'],
                         'email' => $pessoa['email'],
                         'id_cidade' => $pessoa['id_cidade'],
    ]);
    }
}
?>