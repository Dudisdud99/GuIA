

    function enviarTexto() {
        var textarea = document.getElementById('textarea');
        var textoDigitado = textarea.value;
  
        if (textoDigitado.trim() !== '') {
          var divTexto = document.createElement('div');
          divTexto.className = 'texto-div';
          divTexto.innerText = textoDigitado;
  
          var textoContainer = document.getElementById('texto-container');
          textoContainer.appendChild(divTexto);
  
          textarea.value = '';
        }
    }