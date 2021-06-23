<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Atletas;

$busca = filter_input(INPUT_GET, "busca", FILTER_SANITIZE_STRING);
$filtros = filter_input(INPUT_GET, "medalhas", FILTER_SANITIZE_STRING);
$filtros = in_array($filtros,['Bronze','Prata','Ouro', "Ordem"]) ? $filtros : '';

if($filtros == "Ordem"){
    $filtros = "Ouro";
    $condicoes = [
        strlen($filtros) ? 'medalha = "'.$filtros.'"' : null
    ];
    
    $condicoes = array_filter($condicoes);
    
    $where = implode(' AND ',$condicoes);  
    
    $ouros = Atletas::getAtletas($where);
    $filtros = "Prata";
    $condicoes = [
        strlen($filtros) ? 'medalha = "'.$filtros.'"' : null
    ];
    
    $condicoes = array_filter($condicoes);
    
    $where = implode(' AND ',$condicoes);  
    
    $pratas = Atletas::getAtletas($where);
    $filtros = "Bronze";
    $condicoes = [
        strlen($filtros) ? 'medalha = "'.$filtros.'"' : null
    ];
    
    $condicoes = array_filter($condicoes);
    
    $where = implode(' AND ',$condicoes);  
    
    $bronzes = Atletas::getAtletas($where);

    $atletas = array_merge($ouros,$pratas,$bronzes);
    $filtros = "Ordem";
}else {
    $condicoes = [
        strlen($busca) ? 'nome LIKE "%'.str_replace(" ","%",$busca).'%"' : null,
        strlen($filtros) ? 'medalha = "'.$filtros.'"' : null
    ];
    
    $condicoes = array_filter($condicoes);
    
    $where = implode(' AND ',$condicoes);
    
    
    $atletas = Atletas::getAtletas($where);
}
// $condicoes = [
//     strlen($busca) ? 'nome LIKE "%'.str_replace(" ","%",$busca).'%"' : null,
//     strlen($filtros) ? 'medalha = "'.$filtros.'"' : null
// ];

// $condicoes = array_filter($condicoes);

// $where = implode(' AND ',$condicoes);


// $atletas = Atletas::getAtletas($where);
// //echo "<pre>"; print_r($atletas); echo"<pre>"; exit;

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';

