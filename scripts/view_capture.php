<?php
session_cache_expire(60);
session_start();

// OBS : Não é seguro, e nem aconselhavel que voce faça conexao com o banco de dados
// em todas as suas páginas, portanto busque sempre aproveitar o código importando funções.
$con = new PDO("mysql:host=localhost;dbname=meusite", "root", "admin");

// Capturando o IP e inserindo no banco.
$ip = $_SERVER['REMOTE_ADDR'];
$stmt = $con->prepare("INSERT INTO views (ip) VALUES('$ip');");
$stmt->execute();
?>