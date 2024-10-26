
<?php
require_once './db/pessoaDB.php';

/** Quando no pessoa_form clicar em inserir vai carregar os campos em branco*/
$pessoa = [];
$pessoa   ['id']        = ''; 
$pessoa   ['nome']      = ''; 
$pessoa   ['endereco']  = ''; 
$pessoa   ['bairro']    = ''; 
$pessoa   ['telefone']  = ''; 
$pessoa   ['email']     = ''; 
$pessoa   ['id_cidade'] = ''; 
$pessoa   ['cidade']    = ''; 

if (!empty($_REQUEST['action']))
{
   
    if ($_REQUEST['action'] == 'edit')
    {
        if (!empty($_GET['id']))
        {
            $id = (int) $_GET['id'];
            $pessoa = getPessoa($id);
        }
    }
    else if ($_REQUEST['action'] == 'save')
    {
        $id        = $_POST['id'];
        $pessoa    = $_POST; 
    
        if (empty($_POST['id']))
        {
           /* * Busca o próximo id da base da dados*/        
            $pessoa['id'] = getNextPessoa();
            $result = insertPessoa($pessoa);
        }
        else
        {
      /**Realiza Update */
      $result = updatePessoa($pessoa);
        }
        print ($result) ? 'Registro salvo com sucesso': 'Problema ao salvar o registro';
    }
}
require_once 'lista_combo_cidades.php';
$cidades = lista_combo_cidades( $pessoa ['id_cidade'] );

/**
 * pega os campos do formulário form.html
 */
$form = file_get_contents ('html/form.html');
$form = str_replace( '{$id}',$pessoa ['id'], $form);
$form = str_replace( '{$nome}',$pessoa ['nome'], $form);
$form = str_replace( '{$endereco}',$pessoa ['endereco'], $form);
$form = str_replace( '{$bairro}', $pessoa ['bairro'], $form);
$form = str_replace( '{$telefone}', $pessoa ['telefone'], $form);
$form = str_replace( '{$email}', $pessoa ['email'], $form);
$form = str_replace( '{$id_cidade}', $pessoa ['id_cidade'], $form);
$form = str_replace( '{$cidades}', $cidades, $form);

print $form;
?>