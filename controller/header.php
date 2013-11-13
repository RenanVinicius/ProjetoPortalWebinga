<?php 

    require("system/Template.class.php"); 

    $tpl = new Template("templates/padrao/header.html"); 

    // Simulando produtos cadastrados no banco de dados 
    $produtos = array( 
        array("nome" => "Sabão em Pó", "quantidade" => 15), 
        array("nome" => "Escova de Dente", "quantidade" => 53), 
        array("nome" => "Creme Dental", "quantidade" => 37),
        array("nome" => "asdasd23423", "quantidade" => 50) 
    ); 

    // Listando os produtos 
    foreach($produtos as $p){ 
        $tpl->NOME = $p["nome"]; 
        $tpl->QUANTIDADE = $p["quantidade"];
        $tpl->block("BLOCK_PRODUTO"); 
    } 
     
     

    $tpl->show(); 


     
?>