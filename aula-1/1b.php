<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 1b - JSON.stringify()</title>
    <script>
        /* JSON.stringify() - Converte um objeto javascript em uma string JSON */
        var objetoJS = {"nome":"Juan", "idade": 31, "pais": "Peru"};
        var stringJS = JSON.stringify(objetoJS);
        console.log(stringJS);
    </script>
</head>
<body>
    <h2>Aula 1b - JSON.stringify()</h2>
    <h3 style=color:blue;>Converrtendo um objeto javascript em uma string JSON</h3>

    <script>
        document.write("<p>Tipo de variável a converter: " + typeof objetoJS + "</p>");
        document.write("<p>Tipo de variável convertido: " + typeof stringJS + "</p>");
    </script>

</body>
</html>
