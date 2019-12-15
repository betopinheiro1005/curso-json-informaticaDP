<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 1a - JSON.parse()</title>
    <script>
        /* JSON.parse() - Converte uma string JSON em um objeto javascript */
        var dados = '{"nome":"Juan", "idade": 31, "pais": "Peru"}' ;
        var objetoJS = JSON.parse(dados);
        console.log(objetoJS);
    </script>
</head>
<body>
    <h2>Aula 1a - JSON.parse()</h2>
    <h3 style=color:blue;>Convertendo uma string JSON em um objeto javascript</h3>

    <script>
        document.write("<p>Tipo de variável a converter: " + typeof dados + "</p>");
        document.write("<p>Tipo de variável convertido: " + typeof objetoJS + "</p>");
    </script>

</body>
</html>
