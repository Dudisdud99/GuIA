<!DOCTYPE html>
<html lang='pt-BR'>
<head>
  <meta charset='utf-8'>
  <title>Mostrar Senha</title>
  <script>
    function togglePasswordVisibility() {
      var passwordInput = document.getElementById('senha');
      var toggleButton = document.getElementById('toggleButton');

      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleButton.innerText = 'Esconder';
      } else {
        passwordInput.type = 'password';
        toggleButton.innerText = 'Mostrar';
      }
    }
  </script>
</head>
<body>
  <h1>Mostrar Senha</h1>
  <label for="senha">Senha:</label>
  <input type="password" id="senha" name="senha">
  <button id="toggleButton" onclick="togglePasswordVisibility()">Mostrar</button>
</body>
</html>
