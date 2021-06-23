<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Atleta');

use \App\Entity\Atletas;

//echo "<pre>"; print_r($_POST); echo"<pre>"; exit;
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
  }
  
  $obAtleta = Atletas::getatleta($_GET['id']);
 

  if(!$obAtleta instanceof Atletas){
    header('location: index.php?status=error');
    exit;
  }
  

if(isset($_POST['nome'],$_POST['modalidades'],$_POST['medalha'])){
    


    $obAtleta->nome = $_POST['nome'];
    $obAtleta->modalidade = $_POST['modalidades'];
    $obAtleta->medalha = $_POST['medalha'];
    $obAtleta->atualizar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/editar.php';
include __DIR__.'/includes/footer.php';

