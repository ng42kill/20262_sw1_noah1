<!DOCTYPE html>
<html lang="en">
    <?php 
    include('exibe_a.php')
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <input type="text" id="nome" required> nome <br>
        <input type="text" id="email" required> email <br>
        <button>Enviar</button><br>
        <hr><br>
        <div>
            <?php 
            exibe()
            ?>
        </div>
</body>
</html>