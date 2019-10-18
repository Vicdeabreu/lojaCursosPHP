<?php 

  session_start();
  // Deslogando usuario
  session_destroy();
  // Voltando para home
  header('Location:index.php');
