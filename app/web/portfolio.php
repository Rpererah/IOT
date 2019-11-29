<?php include_once("header.php"); ?>
<?php 
class Portfolio 
{
    public $imagem, $descricao;
    function __construct($imagem, $descricao)
    {
        $this->imagem = $imagem;
        $this->descricao = $descricao;
    }
}
$portfolios = array( 
    new Portfolio('',  ''),
    new Portfolio('',  ''),
    new Portfolio('',  ''),
    new Portfolio('',  ''),
    );
?>
<div class="row"></div>
    <main>
    <h1>Portfolio</h1>
        <?php foreach ($portfolios as $cartao) { ?>
        <div class="card col-sm-12 col-md-6">
            <img class="card-img-top" src="<?=$cartao->imagem?>" alt=""> 
            <div class="card-body">
                <h3 class="card-title"><?=$cartao->descricao?></h3>
            </div>
        </div>
        <?php } ?>
    </main>

<?php include_once("footer.php"); ?>