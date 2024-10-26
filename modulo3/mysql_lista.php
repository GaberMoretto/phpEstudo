<?php 

 //host, user, senha, banco
$conn = mysqli_connect('127.0.0.1', 'root', '', 'famosos');



// Define a consulta
 $query =  'SELECT codigo, nome FROM famosos'; 

// Retorna a conexão e a consulta
$result = mysqli_query($conn, $query);
if ($query)
{
    // essa função retorna 1 resultado de cada vez
    while ($row = mysqli_fetch_assoc($result))
    {
        echo $row['codigo'] . ' - ' . $row['nome'] . '<br>';
    }
}

//Fecha a conexão com o banco
mysqli_close($conn);

?>