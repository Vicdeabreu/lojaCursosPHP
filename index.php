<?php
    $nomeSistema = " Digital House";
    $usuario = ["nome"=>"Vinicius"];

    $produtos = [
        ["nome"=>"Curso Full Stack","preco"=>1200.00,"duracao"=>"5 meses"],
        ["nome"=>"Curso Marketing","preco"=>1000.00,"duracao"=>"4 meses"],
    ];

    $categorias = ["Cursos", "Palestras", "Artigos","Conversatorios","Treinamentos","MOOC","Cursos Semipresenciais"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php 
        // $nome = "Victor";
        // $idade = 28;
        // $usuario = ["Victor","De Abreu",28, ["musica"]];
        
        // $usuarioDois = ["nome"=>"Victor","sobrenome"=>"De Abreu"];

        // var_dump($usuario);

        // $usuario[] = "Guitarra";

        // echo "<br>";

        // var_dump($usuario);
        
        // echo "<hi>".$usuario[0]." ".$usuario[1]"</h1>";
        
        // echo $usuarioDois["sobrenome"];
    ?>
<header class="navbar">
    <h1 id="logo">
        <?php echo $nomeSistema; ?>
    </h1>
    <nav>
        <ul class="nav">
            <?php if(isset($usuario) && $usuario != []) {?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Curso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Olá <?php echo $usuario['nome']; ?></a>
                </li>
            <?php }else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Cadastro</a>
                </li>
            <?php } ?>
        </ul>
    </nav>
</header>
<main>
    <section class="navbar bg-dark d-flex justify-content-center"> 
        <nav>
            <?php if(isset($categorias) && $categorias !=[]) {?>
                <ul class="nav justify-content-center">
                    <li class="nav-item"><?php foreach($categorias as $categoria){?> 
                        <a class="nav-link text-white" href="#"><?php echo $categoria;?></a>
                    </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </nav>
    </section>

    <section class="container mt-4">
        <div class="row justify-content-around">
        <?php if(isset($produtos) && $produtos !=[]) {?>
            <?php foreach($produtos as $produto){ ?>
            <div class="col-lg-3 card text-center">
                    <h2><?php echo $produto['nome']; ?></h2>
                    <img src="img/curso.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $produto['preco']; ?></h5>
                        <a href="#" class="btn btn-primary">Comprar curso</a>
                    </div>
                </div>
                    <!-- fechando php DO FOREACH -->
            <?php } ?>
                <!-- fechando o if em! -->
        <?php } else { ?>
            <h1>Nao tem produtos cadastrados nessa sessao :(</h1>
        <?php } ?>
        </div>
    </section>
</main>

</body>
</html>