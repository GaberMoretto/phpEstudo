<?php 
declare(strict_types=1);
class Estado
{
    private string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function getNome(): string{
        return $this->nome;
    }
}
class Cidade
{
    private string $nome;
    // private Estado $estado; /**Item 1 */
    private ?Estado $estado; /** Item 2 O símbolo de ? na frente do objeto, indica que o objeto pode ser null  */

    public function __construct(string $nome, Estado $estado = NULL)
    {
        $this->nome = $nome;
        $this->estado = $estado;
    }
        public function getEstado()
        {
            return $this->estado;
        }
    }
/* Item 1
 $rs = new Estado('RS');
 $cid = new Cidade('Lajeado', $rs);

 print $cid->getEstado()->getNome();
 */

/** Item 2
 $cid = new Cidade('Lajeado' );

 if ($cid->getEstado() instanceof Estado)
 {
 print $cid->getEstado()->getNome();
 }
 */

 $cid = new Cidade('Lajeado');
 print $cid->getEstado()?->getNome(); /**A interrogação identifica se existe valor ou se ele for null */
?>