<?php
include_once "conexao.php";

try {
    $consulta = $conectar->query("SELECT * FROM user");
    echo "<a href='formcadastro.php'> Nono cadastro</a><br><br>Listagem de Usuários<br>";

    echo "<table border='1'<tr><td>Nome</td><td>Login</td><td>Ações</td><br><br></tr>";

    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){

    echo "<tr><td>$linha[nome]</td><td>$linha[login]</td><td><a href='formeditar.php?id=$linha[id]'>Editar</a> -
     <a href='excluir.php?id=$linha[id]'>Excluir</a></td></tr>";

        
    }

    echo "</table>";

    echo $consulta->rowCount(). " Registros exibidos";
}catch(PDOException $e) {
    echo "Error" . $e->getMessage();

}
?>