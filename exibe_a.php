<?php
function exibe(){
include("conecta.php");
$sql = "SELECT * FROM tb_contatos";
$stmt = $pdo->query($sql);
$texto = "";

$resultados = $stmt->fetchAll(PDO::FETCH_OBJ);

foreach($resultados as $user){
    $texto.= "Nome: {$user->nm_contato} || Email: {$user->ds_email} <br>";
}
    echo $texto;
}
?>