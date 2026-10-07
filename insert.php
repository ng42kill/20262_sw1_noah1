<?php
include("conecta.php");

try {
    $sql = "INSERT INTO tb_contatos (nm_contato, ds_email) VALUES (:nome, :email)";
    $stmt = $pdo->prepare($sql);

    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);

    $stmt->execute();

    echo "deu certo!";
} catch (PDOException $e) {
    echo "Algo deu de errado: " . $e->getMessage();
}
?>