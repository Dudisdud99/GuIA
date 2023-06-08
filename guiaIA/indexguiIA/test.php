<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Aba de Escrita</title>
    <style>
        .tab-content {
            display: none;
        }

        .active {
            display: block;
        }
    </style>
    <script>
        function openTab(tabName) {
            var i, tabContent;
            tabContent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabContent.length; i++) {
                tabContent[i].style.display = "none";
            }
            document.getElementById(tabName).style.display = "block";
        }
    </script>
</head>
<body>
    <h1>Aba de Escrita</h1>
    <ul>
        <li><a href="#" onclick="openTab('tab1')">Escrever</a></li>
    </ul>
    <div id="tab1" class="tab-content active">
        <h2>Escreva algo:</h2>
        <form>
            <textarea rows="4" cols="50"></textarea>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
