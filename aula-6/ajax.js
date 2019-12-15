$(document).ready(function(){
    $("#btnConsulta").click(function(){
        $.ajax({
            url:"consulta.php",
            type:"POST",
            dataType:"json",
            success:function(data){
                console.log(data);
                console.log(data[2].pais);

                var strJSON = JSON.stringify(data);
                console.log("Tipo de dados: " + typeof strJSON);
                console.log(strJSON);
            }
        })
    })
});