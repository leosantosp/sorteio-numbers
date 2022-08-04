<?php 
    date_default_timezone_set("America/Sao_Paulo");

    define('HOST', 'localhost');
    define('DB_NAME', 'sistema_reserva');
    define('USER', 'root');
    define('PASSWORD', '');

    define('ROOT_PATH', dirname(__FILE__));
    // CONECTAR NO BANCO DE DADOS

    global $pdo;

    try {
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB_NAME.';charset=utf8',USER,PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo "<div class='erro-conectar'><h2>Erro ao Conectar ao Banco de Dados</h2></div>".$e;
    }
?>