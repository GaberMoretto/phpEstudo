<?php 
class Funcionario{
    function setSalario(){

    }
    function getSalario(){

    }
    function setNome(){

    }
    function getNome(){

    }
}
echo '<pre>';
print_r(get_class_methods('Funcionario'));
echo '</pre>';

/**
 * Array
(
    [0] => setSalario
    [1] => getSalario
    [2] => setNome
    [3] => getNome
)
 */
?>