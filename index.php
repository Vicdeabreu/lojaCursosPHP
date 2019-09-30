<?php
    $nomeSistema = " Digital House";
<<<<<<< HEAD
    $usuario = ["nome"=>"Vinicius"];
=======
>>>>>>> 387b0ab1dd6e6dc3687d412f2daecff3cdac0e2f
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
    <section class="container mt-4">
        <div class="row justify-content-around">
           <div class="col-lg-3 card text-center">
                <h2>Titulo produto</h2>
                <img src="img/curso.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">R$150,00</h5>
                    <a href="#" class="btn btn-primary">Comprar curso</a>
                </div>
           </div>
           <div class="col-lg-3 card text-center">
                <h2>Titulo produto</h2>
                <img src="img/curso.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">R$150,00</h5>
                    <a href="#" class="btn btn-primary">Comprar curso</a>
                </div>
           </div>
           <div class="col-lg-3 card text-center">
                <h2>Titulo produto</h2>
                <img src="img/curso.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">R$150,00</h5>
                    <a href="#" class="btn btn-primary">Comprar curso</a>
                </div>
           </div>
        </div>
    </section>
</main>

</body>
</html>