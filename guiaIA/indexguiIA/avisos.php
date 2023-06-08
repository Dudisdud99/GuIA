<!DOCTYPE html>
<html lang='pt-BR'>
  <head>
    
    <meta charset='utf-8'>
    <title>Menu</title>
    <link rel='stylesheet' type='text/css' media='screen' href='assets\avisos.css'>
    <script defer src='assets\avisos.js'></script>
  </head>
  <body>
    <?php 
      session_start();

      $matricula = $_SESSION['matricula'];
      $curso = $_SESSION['curso'];

      include_once('config.php');

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $texto = $_POST['texto'];
      
        $sql = "INSERT INTO textos (texto) VALUES ('$texto')";
        if (mysqli_query($conexao, $sql)) {
          echo "Texto adicionado com sucesso.";
          // Adicionar o texto à variável de sessão
          $_SESSION['textos'][] = $texto;
        } else {
          echo "Erro ao adicionar o texto: " . mysqli_error($conexao);
        }
      }
      $textos = isset($_SESSION['textos']) ? $_SESSION['textos'] : [];

    ?>
    <div id="img">
      <img src="img/Logotipo_IFET.svg.png" alt="" id="logo"><h1>GuIA IFC Camboriu</h1>
    </div>
    <form action="" method="POST">
    <div id="escrever">
        <!--<button id="escrever"><img src="img/caneta.png" alt="" class="icone"></button>-->
      <form action="avisos.php" method="POST">
        <textarea name="texto" id="textarea" cols="30" rows="5"></textarea>
        <button onclick="enviarTexto()"><img src="img/enviar.png" alt="" class="icone"></button>
    </div>
    </form>
    <div id="texto-container"><?php
       foreach ($textos as $texto) {
        echo '<div class="texto-div">' . $texto . '</div>';
      
      }
    ?></div>
    <a href="index.php">Login</a>
    <a href="cadastro.php">Cadastro</a>
    