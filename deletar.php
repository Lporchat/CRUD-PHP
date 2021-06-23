<?php

require __DIR__.'/vendor/autoload.php';


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
  //echo "<pre>"; print_r($obAtleta); echo"<pre>"; exit;

if(isset($_POST['deletar'])){
    

    $obAtleta->deletar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirma-delecao.php';
include __DIR__.'/includes/footer.php';

