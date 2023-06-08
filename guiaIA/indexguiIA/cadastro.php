<!DOCTYPE html>


<html lang='pt-BR'>
  <head>
    
    <meta charset='utf-8'>
    <title>Cadastro</title>
    <link rel='stylesheet' type='text/css' media='screen' href='assets\cadastro.css'>
    <script defer src='assets\main.js'></script>
  </head>
  <body>
    <div id="img">
      <img src="img/Logotipo_IFET.svg.png" alt=""><h1>GuIA IFC Camboriu</h1>
    </div>
    <br>
    <?php 
      session_start();

      include_once('config2.php');

      if($_SERVER['REQUEST_METHOD'] === 'POST'){
          if(empty($_POST['matricula']) || empty($_POST['senha']) || empty($_POST['curso'])){
              echo "Preencha todos os campos antes de cadastrar";
          } else {
              $matricula = $_POST['matricula'];
              $senha = $_POST['senha'];
              $curso = $_POST['curso'];
      
              $insert = "INSERT INTO usuarios (matricula, senha, curso) VALUES ('$matricula', '$senha', '$curso')";
              $result = mysqli_query($conexao, $insert);
      
              if($result){
                  echo "Cadastro realizado com sucesso!";
                  header('location: index.php');
                  $sucesso = 'sucesso';
                  $_SESSION['sucesso'] = $sucesso;
              } else {
                  echo "Erro ao cadastrar. Tente novamente.";
              }
          }
      }
    ?>
    
    <div id="form">
      <form action="cadastro.php" method="POST">
        <div id="cadastro"><h2>Cadastro</h2>
          <label>Matrícula:</label>
          <input type="text" name="matricula" id="matricula">
          <br>
          <br>
          <label for="senha">Senha:</label>
          <input type="password" name="senha" id="senha">
          <br>
          <br>
          <label>Curso:</label>
          <input list="escolha" name="curso" id="curso">
          <datalist id="escolha">
            <option value="AA21">
            <option value="AA22">
            <option value="AA23">
            <option value="AB21">
            <option value="AB22">
            <option value="AB23">
            <option value="AC21">
            <option value="AC22">
            <option value="AC23">
            <option value="THA21">
            <option value="THA22">
            <option value="THA23">
            <option value="THB21">
            <option value="THB22">
            <option value="THB23">
            <option value="IA21">
            <option value="IA22">
            <option value="IA23">
            <option value="CA21">
            <option value="CA22">
            <option value="CA23">
          </datalist>
          <br>
          <br>
          <div id="cadastrar">
            <label for="submit" id="cadastrar">Cadastrar</label>
          </div>
          <button type="submit" name="submit" id="submit">Enviar</button>
          <br>
          <br>
          <div>
            <a href="index.php">Fazer login</a>
          </div>
          <br>
        </div>
      </form>
    </div>
  </body>
</html>

