<?php
include_once "conexao.php";

    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $consulta = $conectar->query("SELECT * FROM user WHERE id = '$id'");
    $linha = $consulta->fetch(PDO::FETCH_ASSOC);

?>
<form action="editar.php" method="post">
    Nome:
    <input type="text" name="nome" value="<?php echo $linha['nome'] ?>" id="nome"><br><br>
    Login:
    <input type="password" name="login" value="<?php echo $linha['login'] ?>" id="login"><br><br>
    <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
    <input type="submit" value="Editar">
</form>