<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastra Atleta');


use \App\Entity\Atletas;

//echo "<pre>"; print_r($_POST); echo"<pre>"; exit;

if(isset($_POST['nome'],$_POST['modalidades'],$_POST['medalha'])){
    

    $obAtletas = new Atletas;
    $obAtletas->nome = $_POST['nome'];
    $obAtletas->modalidade = $_POST['modalidades'];
    $obAtletas->medalha = $_POST['medalha'];
    $obAtletas->Cadastrar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formularios.php';
include __DIR__.'/includes/footer.php';

