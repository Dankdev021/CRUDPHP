<?php

try {
    $conectar = new PDO("mysql: local=localhost; dbname=crudpdo", "root");
        echo "Status: conected<br><br>";

}catch (PDOException $erro) {
    echo $erro->getMessage();
}
