<?php
spl_autoload_register(function ($classe) {
    if (file_exists($classe . '.php')) {
        require_once $classe . '.php';
    }
});
$classe = isset($_REQUEST['class']) ? $_REQUEST['class'] : NULL;
$metodo = isset($_REQUEST['method']) ? $_REQUEST['method'] : NULL;

if (class_exists($classe)) {
    $pagina = new $classe($_REQUEST);
    if (!empty($metodo) and method_exists($classe, $metodo)) {
        $pagina->$metodo($_REQUEST);
    }
    $pagina->show();
}
