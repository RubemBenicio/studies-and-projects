<?php
session_start();
    
define('host', '127.0.0.1');
define('usuario', 'root');
define('senha', '');
define('bd', 'loja_x');

$conexao = mysqli_connect(host, usuario, senha, bd) or die('Não foi possível Conectarlo ao banco');

?>