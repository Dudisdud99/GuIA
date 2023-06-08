<!DOCTYPE html>
<html lang='pt-BR'>
  <head>
    
    <meta charset='utf-8'>
    <title>Menu</title>
    <link rel='stylesheet' type='text/css' media='screen' href='assets\menu.css'>
    <script defer src='assets\main.js'></script>
  </head>
  <body>
    <?php 
      session_start();

      $matricula = $_SESSION['matricula'];
      $curso = $_SESSION['curso'];
    ?>
    
    <div id="img">
      <img src="img/Logotipo_IFET.svg.png" alt="" id="main"><h1>GuIA IFC Camboriu</h1>
      <div id="borda">
        <div id="usuario">
          <h3 id="usuario">Usuário</h3>
          <div><?php echo $matricula?></div>
          <div><?php echo $curso?></div>
        </div>
      </div>
    </div>
    <div id="abas">
      <div id="grid">
        <div class="grid">
          <label for="">Horários</label>
          <a href="horarios.php">
            <div class="borda">
              <img src="img/relogio.png" alt="" class="grid">
            </div>
          </a>
        </div>
        <div class="grid">batata</div>
        <div class="grid">batata</div>
        <div class="grid">batata</div>
      </div>
    </div>
    <a href="index.php">Login</a>
    <a href="cadastro.php">Cadastro</a>
    