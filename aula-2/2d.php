<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 2d - JSON - Tipos de dados</title>
    <script>
        /* Array de objetos */
        var pessoas = [
            {"nome": "Alexandre", "idade": 35, "UF": "SP"},
            {"nome": "Maria", "idade": 28, "UF": "MT"},
            {"nome": "Silvia", "idade": 65, "UF": "RJ"}
        ];
        console.log(pessoas);
        console.log(pessoas[0].nome);
        console.log(pessoas[1].idade);
        console.log(pessoas[2].UF);
    </script>
</head>
<body>
    <h2>Aula 2d - JSON - Tipos de dados</h2>
    <h3 style=color:blue;>Array de objetos</h3>

    <script>
        document.write("<p>Tipo de dado: " + typeof pessoas + "</p>");
    </script>

</body>
</html>
