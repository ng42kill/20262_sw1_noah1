<?php
include("conecta.php");
$sql = "SELECT * FROM tb_contatos";
$stmt = $pdo->query($sql);

$resultados = $stmt->fetchAll(PDO::FETCH_OBJ);

foreach($resultados as $user){
    echo "Nome: {$user->nm_contato} || Email: {$user->ds_email}";
}
?>