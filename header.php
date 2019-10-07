<?php include_once('config/variaveis.php') ?>

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