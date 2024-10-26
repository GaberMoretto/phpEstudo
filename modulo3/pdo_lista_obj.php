<?php 
try{
    // acessa mysql/ host/ porta / base de dados / usuário / senha 
$conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=famosos' , 'root', '');

$result = $conn->query("SELECT codigo, nome FROM famosos");

if ($result){
    while ($row = $result->fetchObject()) {
        print $row->codigo . '-' . $row->nome . '<br>';
    }
}
}
catch (PDOException $e){
    print $e->getMessage();
}
?>

