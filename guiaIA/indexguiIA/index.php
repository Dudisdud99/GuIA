

<!DOCTYPE html>
<html lang='pt-BR'>
  <head>
    
    <meta charset='utf-8'>
    <title>Login</title>
    <link rel='stylesheet' type='text/css' media='screen' href='assets\index.css'>
    <script defer src='assets\main.js'></script>
  </head>
  <body>
    <div id="img">
      <img src="img/Logotipo_IFET.svg.png" alt=""><h1>GuIA IFC Camboriu</h1>
    </div>
    <br>
    <?php 
      session_start();

      include_once('config.php');

      if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(empty($_POST['matricula']) || empty($_POST['senha'])){
        echo "Preencha todos os campos antes de logar";
        } else {
          $matricula = $_POST['matricula'];
          $senha = $_POST['senha'];
          $select = "SELECT * FROM usuarios WHERE matricula = '$matricula' AND senha = '$senha'";
          $selectCurso = "SELECT curso FROM usuarios WHERE matricula = '$matricula' AND senha = '$senha'";
          $sql = $select;
          $result = mysqli_query($conexao, $sql);
          $cursoResult = mysqli_query($conexao, $selectCurso);

          if(mysqli_num_rows($result) == 1){
            // Os dados de matrícula e senha correspondem
            // Recupere o valor do curso
            $row = mysqli_fetch_assoc($cursoResult);
            $curso = $row['curso'];
            $_SESSION['matricula'] = $matricula;
            $_SESSION['curso'] = $curso;

          }
          
        
          

          if(mysqli_num_rows($result) == 1){
            // Os dados de matrícula e senha correspondem 
            echo "Login bem-sucedido!";
            header('location: menu.php');
          } else {
            // Os dados de matrícula e senha não correspondem
            echo "Matrícula ou senha incorretos. Tente novamente.";
          }
          
        }
      }

      $sucesso = 'sucesso';

      if($sucesso = $_SESSION['sucesso']){
        echo "\n\n\nCadastro realizado com sucesso!";
      }
    ?>
    <div id="form">
      <form action="index.php" method="POST">
        <div id="login"><h2>Login</h2>
          <label>Matrícula:</label>
          <input type="text" name="matricula" id="matricula">
          <br>
          <br>
          <label for="senha">Senha:</label>
          <input type="password" name="senha" id="senha">
          <br>
          <br>
          <div id="logar">
          <label for="submit" id="logar">Logar</label>
          </div>
          <button type="submit" name="submit" id="submit"  onclick="redirecionar"></button>
          <br>
          <br>
          <div>
            <a href="cadastro.php">Fazer cadastro</a>
          </div>
          <br>
        </div>
      </form>
    </div>
  </body>
</html>

