<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 1c - JSON.stringify()</title>
    <script>
        /* JSON.stringify() - Converte um array em uma string JSON */
        var diasSemana = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];
        var stringJS = JSON.stringify(diasSemana);
        console.log(stringJS);
    </script>
</head>
<body>
    <h2>Aula 1c - JSON.stringify()</h2>
    <h3 style=color:blue;>Convertendo um array em uma string JSON</h3>

    <script>
        document.write("<p>Tipo de variável a converter: " + typeof diasSemana + "</p>");
        document.write("<p>Tipo de variável convertido: " + typeof stringJS + "</p>");
    </script>

</body>
</html>
