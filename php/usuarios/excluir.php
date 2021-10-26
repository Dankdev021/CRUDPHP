<?php 
include_once "conexao.php";

try {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    $delete = $conectar->prepare("DELETE FROM user WHERE id = :id");
    $delete->bindParam(':id', $id);
    $delete->execute();

    header("location: listaUsuario.php");

}catch (PDOException $e) {
    echo $e->getMessage();
}
?>