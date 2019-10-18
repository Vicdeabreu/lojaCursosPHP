<?php
session_start();
    $nomeSistema = "Digital House";
    $usuario = isset($_SESSION['usuario'])? $_SESSION['usuario']: [];  //* Validar si existe una sesión llamada usuario

    $nomeArquivo = __DIR__."/../produto.json"; // "__Dir__" es importante para llamar archivos entre carpetas
    $produtos = json_decode(file_get_contents($nomeArquivo), true);
    echo $nomeArquivo;


    var_dump($produtos);

    // $produtos = [
    //     ["nome"=>"Curso Full Stack","preco"=>1200.00,"duracao"=>"5 meses", "img"=>"img/curso.jpg"],
    //     ["nome"=>"Curso Marketing","preco"=>1000.00,"duracao"=>"4 meses", "img"=>"img/curso.jpg"],
    // ];

    $categorias = ["Cursos", "Palestras", "Artigos","Conversatorios","Treinamentos","MOOC","Cursos Semipresenciais"];
?>