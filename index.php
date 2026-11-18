<!DOCTYPE html>
<html lang="en">
    <?php 
    include('exibe_a.php')
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script src="jquery-4.0.0.min.js"></script>
    <script> 
        $(document).ready(function(){
            $("button").click(function(){
                var nome = $("#nome").val();
                var email = $("#email").val();

                $.ajax({
                    url: "insert.php",
                    type: "POST",
                    data: "nome=" + nome + "&email=" + email,
                    dataType: "html"
                    
                }).done(function(resposta) {
                    $("div").html(resposta);

                }).fail(function(jqXHR, textStatus ) {
                    alert("Request failed: " + textStatus);

                }).always(function() {
                    console.log("algo aconteceu");
                });
            });
        });
    </script>
</head>
<body>
        <button type="button" class="btn btn-primary">Novo</button><br>
        <input type="text" id="nome"> nome <br>
        <input type="text" id="email"> email <br>
        <button>Enviar</button><br>
        <br>
        <div><?php exibe(); ?></div>
</body>
</html>