<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Pessoas</title>
    <link href="css/list.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<table border="1">
    <thead>
        <tr>
            <td>Editar</td>
            <td>Excluir</td>
            <td>ID</td>
            <td>Nome</td>
            <td>Endereco</td>
            <td>Bairro</td>
            <td>Telefone</td>
        </tr>
    </thead>
    <tbody>
        <?php 
         $conn = mysqli_connect('127.0.0.1','root', '', 'famosos');
         $result = mysqli_query($conn, 'SELECT * from pessoa ORDER BY id');

         while ($row = mysqli_fetch_assoc($result)){
            $id         = $row['id'];
            $nome       = $row['nome'];
            $endereco   = $row['endereco'];
            $bairro     = $row['bairro'];
            $telefone   = $row['telefone'];
            $email      = $row['email'];
            $id_cidade  = $row['id_cidade'];

            print '<tr>';
            print "<td> <a href='pessoa_form_edit.php?id={$id}'>
            <img src='images/edit.svg' style='width:17px'>
            </a> </td>";
            print "<td> <a href='pessoa_delete.php?id={$id}'>
            <img src='images/remove.svg' style='width:17px'>
            </a> </td>";
            print "<td>{$id}</td>";
            print "<td>{$nome}</td>";
            print "<td>{$endereco}</td>";
            print "<td>{$bairro}</td>";
            print "<td>{$telefone}</td>";
            print '</tr>';
         }

        ?>

    </tbody>
    
</table>
<button onclick="window.location='pessoa_form_insert.php'">
    <img src="./images/insert.svg" style="width: 17px"> Inserir
</button>
<body>

</body>
</html>
