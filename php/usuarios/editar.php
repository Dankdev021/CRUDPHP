<?php 
include_once "conexao.php";

try {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_var($_POST['nome']);
    $login = filter_var($_POST['login']);

    $update = $conectar->prepare("UPDATE user SET nome = :nome, login = :login WHERE id = :id");
    $update->bindParam(':id', $id);
    $update->bindParam(':nome', $nome);
    $update->bindParam(':login', $login);
    $update->execute();

    header("location: listaUsuario.php");

}catch (PDOException $e) {
    echo $e->getMessage();
}
?>