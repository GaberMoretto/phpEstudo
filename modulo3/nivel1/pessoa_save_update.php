<?php 
$dados = $_POST;
// print_r($dados);

if($dados['id']){
    $conn = mysqli_connect('127.0.0.1','root', '', 'famosos');

    $sql = "UPDATE pessoa SET nome      = '{$dados['nome']}',
                              endereco  = '{$dados['endereco']}',
                              bairro    = '{$dados['bairro']}',
                              telefone  = '{$dados['telefone']}',
                              email     = '{$dados['email']}',
                              id_cidade = '{$dados['id_cidade']}'
                              WHERE id  = '{$dados['id']}' ";

    // print $sql;
    $result = mysqli_query($conn, $sql);

    if($result){
        print 'Registro atualizado com sucesso';
        
    }else{
        print mysqli_errno($conn);
    }
    mysqli_close($conn);
}

?>