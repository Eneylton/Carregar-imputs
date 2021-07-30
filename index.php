<?php

$id = "";

if(isset($_POST['id'])){

    $id = $_POST['id'];
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery-3.1.js"></script>
    <title>Index</title>
</head>
<body>

<input type="text" id="estados" name="estado">

 
</body>
</html>

<script>

$("#estados").on("change", function(){

    var idEstado = $("#estados").val();
    $.ajax({
        url:'index.php',
        type:'POST',
        data:{
            id:idEstado
        },
        success: function(data){
            $("#cidades").css({'display': 'block'})
            $("#cidades").html(data);
        },
        error: function(data){
            $("#cidades").css({'display': 'block'})
            $("#cidades").html("Houve um error ao carregar");
        }

    })

});

</script>