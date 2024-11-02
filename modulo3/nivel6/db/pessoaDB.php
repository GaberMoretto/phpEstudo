<?php 

function getPessoa($id){
    $conn = mysqli_connect('127.0.0.1','root', '', 'famosos');

    $result = mysqli_query($conn, "SELECT * FROM pessoa WHERE id = '{$id}'");
    $pessoa = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $pessoa;
}
function excluiPessoa($id){
    $conn = mysqli_connect('127.0.0.1','root', '', 'famosos');

    $result = mysqli_query($conn, "DELETE FROM pessoa WHERE id = '{$id}'");
    mysqli_close($conn);
    return $result;
}
function insertPessoa($pessoa){
    $conn = mysqli_connect('127.0.0.1','root', '', 'famosos');

  $sql = "INSERT INTO pessoa (id, nome, endereco, bairro, telefone,
                                                    email, id_cidade)
                                            VALUES ( '{$pessoa['id']}', '{$pessoa['nome']}', '{$pessoa['endereco']}',
                                        '{$pessoa['bairro']}', '{$pessoa['telefone']}', '{$pessoa['email']}', '{$pessoa['id_cidade']}')";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
    return $result;

}
function updatePessoa($pessoa){
    $conn = mysqli_connect('127.0.0.1','root', '', 'famosos');
    
    $sql = "UPDATE pessoa SET nome = '{$pessoa['nome']}',
                              endereco = '{$pessoa['endereco']}',
                              bairro = '{$pessoa['bairro']}',
                              telefone = '{$pessoa['telefone']}',
                              email = '{$pessoa['email']}',
                              id_cidade = '{$pessoa['id_cidade']}'
            WHERE id = '{$pessoa['id']}'";
    
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
function listaPessoa(){
    $conn = mysqli_connect('127.0.0.1','root', '', 'famosos');

    $result = mysqli_query($conn, "SELECT * FROM pessoa ORDER BY ID DESC");
    $list = mysqli_fetch_all($result);
    mysqli_close($conn);
    return $list;
}
function getNextPessoa(){
    $conn = mysqli_connect('127.0.0.1','root', '', 'famosos');

    $result = mysqli_query($conn, "SELECT max(id) as next FROM pessoa");
    $pessoa = mysqli_fetch_assoc($result);
    $next = (int) $pessoa['next'] + 1;
    mysqli_close($conn);
    return $next;
}
?>