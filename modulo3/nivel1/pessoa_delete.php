<?php 
$dados = $_GET;

if($dados['id']){
    $conn = mysqli_connect('127.0.0.1','root', '', 'famosos');
    $id = (int) $dados['id'];
     $sql = "DELETE FROM pessoa WHERE id = {$id}";
    // var_dump($sql);die;

    // print $sql;
    $result = mysqli_query($conn, $sql);

    if($result){
        print 'Registro excluído com sucesso';
        header("Location: pessoa_list.php");
    }else{
        print mysqli_errno($conn);
    }
    mysqli_close($conn);
}

?>