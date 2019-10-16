<?php 
//* Usuario cadastrado no banco de dados
$usuario = ["email"=>"vinicius@gmail.com", 
"senha"=> '$2y$10$q0wEW7SCtTVB971VbtM5cujtra8c4mxD5zI1FSlvPVJIVXqE3EBx.'];

if($_POST){
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  if($email == $usuario['email']){
    //validando a senha
    if(password_verify($senha, $usuario['senha'])){
        session_start();
        $_SESSION['usuario'] = ["nome"=>"Victor"];
        header('Location:index.php');

    } else {
      echo "Email ou senha inválidas";
    }

  } else {
    echo "Email ou senha inválida";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <?php include_once "header.php"; ?>
    <main class="d-flex justify-content-center align-items-center p-5">
      <form action="login.php" method="post" class="card p-2">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="senha">Senha</label>
          <input type="password" name="senha" id="senha" class="form-control" required>
        </div>
        <div class="form-group text-center">
          <button class="btn btn-success" type="submit">Logar</button>
        </div>
      </form>
    </main>
</body>
</html>