<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 2e - JSON - Tipos de dados</title>
    <script>
        /* Booleano */
        var user = {
            "nome":"Henrique",
            "idade": 19,
            "email":"henrique@gmail.com",
            "curso":[
                    {"linguagem_prog":"python", "nota": 6},
                    {"linguagem_prog": "C#", "nota": 4.5},
                    {"linguagem_prog": "java", "nota": 8.5}
                  ],
            "status": false,
            "fone": null};
        console.log(user.idade);
        console.log(user.curso);
        console.log(user.curso[1].nota);
        console.log(user.status);
        console.log(user.fone);
    </script>
</head>
<body>
    <h2>Aula 2e - JSON - Tipos de dados</h2>
    <h3>JSON com diversos tipos de dados</h3>

    <script>
        document.write("<p>Tipo de dado: " + typeof (user.idade) + "</p>");
        document.write("<p>Tipo de dado: " + typeof (user.curso) + "</p>");
        document.write("<p>Tipo de dado: " + typeof (user.curso[1].nota) + "</p>");
        document.write("<p>Tipo de dado: " + typeof (user.status) + "</p>");
        document.write("<p>Tipo de dado: " + typeof (user.fone) + "</p>");
    </script>

</body>
</html>
