<!DOCTYPE html>
<html lang='pt-BR'>
  <head>
    
    <meta charset='utf-8'>
    <title>Horários IA23</title>
    <link rel='stylesheet' type='text/css' media='screen' href='assets\hia23.css'>
    <script defer src='assets\main.js'></script>
  </head>
  <body>
    <?php 
        include_once('config.php');
        //include_once('select.php')

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
          if(empty($_POST['matricula']) || empty($_POST['senha'])){
          //echo "Preencha todos os campos antes de cadastrar";
          } else {
            $matricula = $_POST['matricula'];
            $senha = ($_POST['senha']+'1980')/2;
            $select = "SELECT * FROM usuarios WHERE matricula = '$matricula' AND senha = '$senha'";
            $sql = $select;
            $result = mysqli_query($conexao, $sql);

            //header('location: cadastro.php');

            //if(mysqli_num_rows($result) == 1){
              // Os dados de matrícula e senha correspondem
              // Faça a ação desejada, como redirecionar para uma página de boas-vindas
              //echo "Login bem-sucedido!";
            //} else {
              // Os dados de matrícula e senha não correspondem
              //echo "Matrícula ou senha incorretos. Tente novamente.";
            //}
            
          }
        }
    ?>
    <div id="img">
      <img src="img/Logotipo_IFET.svg.png" alt=""><h1>GuIA IFC Camboriu</h1>
    </div>
    <h2>IA23</h2>
    <div id="grid">
        <div class="grid"></div>
        <div class="grid">7h30 - 8h20</div>
        <div class="grid">8h20 - 9h10</div>
        <div class="grid">9h10 - 10h0</div>
        <div class="grid">10h20 - 11h10</div>
        <div class="grid">11h10 - 12h0</div>
        <div class="grid">13h30 - 14h20</div>
        <div class="grid">14h20 - 15h10</div>
        <div class="grid">15h30 - 16h20</div>
        <div class="grid">16h20 - 17h10</div> <!--10 -->

        <div class="grid">SEG</div>
        <div class="grid">Português</div>
        <div class="grid">História</div>
        <div class="grid">Biologia</div>
        <div class="grid">Educação <br> Fisica</div>
        <div class="escondida"></div>
        <div class="pai" id="pai1">
          <div class="filho">Lógica <br> da <br> programação <br><br>turma1</div>
          <div class="filho">Web <br> design <br><br>turma2 </div>
        </div>
        <div class="escondida"></div>
        <div class="pai" id="pai2">
          <div class="filho">Web <br> design <br><br> turma1</div>
          <div class="filho">Lógica <br> da <br> programação <br><br>turma2</div>
        </div>
        <div class="escondida"></div>
        
        <div class="grid">TER</div>
        <div class="grid">Artes</div>
        <div class="escondida"></div>
        <div class="grid">História</div>
        <div class="grid">Geografia</div>
        <div class="escondida"></div>
        <div class="grid">Química</div>
        <div class="grid">Física</div>
        <div class="grid">Instalação <br> elétrica</div>
        <div class="escondida"></div>

        <div class="grid">QUA</div>
        <div class="grid">Biologia</div>
        <div class="grid">Química</div>
        <div class="grid">Filosofia</div>
        <div class="grid">Matemática</div>
        <div class="escondida"></div>
        <div class="grid"></div>
        <div class="escondida"></div>
        <div class="escondida"></div>
        <div class="escondida"></div>

        <div class="grid">QUI</div>
        <div class="grid">Metod.Ciêntifica</div>
        <div class="grid">Física</div>
        <div class="grid">Matemática</div>
        <div class="escondida"></div>
        <div class="grid"></div>
        <div class="grid">Inglês</div>
        <div class="escondida"></div>
        <div class="grid">Português</div>
        <div class="escondida"></div>

        <div class="grid">SEX</div>
        <div class="grid">Filosofia</div>
        <div class="pai" id="pai-fh">
          <div class="filho">Fundamentos <br> da <br> informática <br><br>turma2</div>
          <div class="filho">Hardware<br><br>turma1</div>
        </div>
        <div class="escondida"></div>
        <div class="pai" id="pai-hf">
          <div class="filho">Hardware<br><br>turma2</div>
          <div class="filho">Fundamentos <br> da <br> informática<br><br>turma1</div>
        </div>
        <div class="escondida"></div>
        <div class="pai" id="pai-lh">
          <div class="filho">Lógica <br> da <br> programação<br><br>turma2</div>
          <div class="filho">Hardware<br><br>turma1</div>
        </div>
        <div class="escondida"></div>
        <div class="pai" id="pai-hl">
          <div class="filho">Hardware<br><br>turma2</div>
          <div class="filho">Lógica <br> da <br> programação<br><br>turma1</div>
        </div>
        <div class="escondida"></div>
    </div>
    