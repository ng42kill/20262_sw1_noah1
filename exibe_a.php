<?php
function exibe(){
include("conecta.php");
$sql = "SELECT * FROM tb_contatos";
$stmt = $pdo->query($sql);
$resultados = $stmt->fetchAll(PDO::FETCH_OBJ);

foreach($resultados as $user){
?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="stormbeast.png" alt="Gahhh">
            <div class="card-body">
                <h5 class="card-title">
                    <?php echo $user->nm_contato; ?>
                </h5>
                <p class="card-text">
                    <?php echo $user->ds_email; ?>
                </p>
                <button type="button" class="btn btn-primary">Editar</button> <button type="button" class="btn btn-primary">Excluir</button>
            </div>
        </div>
<?php
}
}