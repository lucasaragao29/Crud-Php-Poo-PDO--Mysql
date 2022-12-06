<?php
include __DIR__.'/app/Etityr/vaga.php';

use function Composer\Autoload\includeFile;
require __DIR__.'/vendor/autoload.php';
use App\Etityr\Vaga;

if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){
    $obVaga = new Vaga;
    $obVaga->titulo= $_POST['titulo'];
    $obVaga->descricao= $_POST['descricao'];
    $obVaga->ativo= $_POST['ativo'];
    $obVaga->cadastrar();
}



include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';


