<?php
    $nomeSistema = " Digital House";
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
<header class="d-flex justify-content-between align-items-center p-3">
    <h1 id="logo">
        <?php echo $nomeSistema; ?>
    </h1>
    <nav>
        <ul class="nav">
            <li class="nav-item">Login</li>
            <li class="nav-item">Cursos</li>
            <li class="nav-item">Cadastrar</li>
        </ul>
    </nav>
</header>


</body>
</html>