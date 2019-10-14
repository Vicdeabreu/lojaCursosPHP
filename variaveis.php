<?php
    $nomeSistema = " Digital House";
    $usuario = ["nome"=>"Vinicius"];

    $nomeArquivo = "produto.json";
    $produtos = json_decode(file_get_contents($nomeArquivo), true);

    var_dump($produtos);

    // $produtos = [
    //     ["nome"=>"Curso Full Stack","preco"=>1200.00,"duracao"=>"5 meses", "img"=>"img/curso.jpg"],
    //     ["nome"=>"Curso Marketing","preco"=>1000.00,"duracao"=>"4 meses", "img"=>"img/curso.jpg"],
    // ];

    $categorias = ["Cursos", "Palestras", "Artigos","Conversatorios","Treinamentos","MOOC","Cursos Semipresenciais"];
?>