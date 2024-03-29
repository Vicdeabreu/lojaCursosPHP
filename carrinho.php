<?php
    $nomeSistema = " Digital House";
    $usuario = ["nome"=>"Vinicius"];

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
<?php include("header.php");?>

<main>
    <section class="container">
        <div class="row">
            <div class="col-12">
                <h1>Carrinho de compras</h1>
            </div>
            <div class="col-12">
                <div class="row card">
                    <div class="12">
                        <h3>Vocé está comprando o <?php echo $_GET['nomeProduto']; ?></h3>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <form class="d-flex flex-column p-3" method="post" action="sucesso.php">
                            <input type="text" name="nomeCompleto" placeholder="Digite seu nome">
                            <input type="number" name="cpf" placeholder="Digite seu CPF">
                            <input type="number" name="cartao" placeholder="Digite o numero do cartao">
                            <input type="date" name="validadeCartao" placeholder="Digite a data e validade">
                            <input type="password" name="codigoCartao" placeholder="Digite o CVC">
                            <button class="btn btn-success" type="submit">Finalizar compra</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</main>

</body>
</html>