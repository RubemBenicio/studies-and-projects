<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        
        <form action="login.php" method="post">
            <?php
                if(isset($_SESSION['nao_concluido'])):
            ?>
            <br>
            <span>
                <div class="erro">
                    <h3>Erro</h3>
                    <h5>Email ou senha está incorreto ou é invalido.</h5>
                </div>
            </span>
            <br>
            <?php
                endif;
                unset($_SESSION['nao_concluido']);
            ?>
            <input name="nome" type="text" placeholder="Nome" id="nome">
            <input type="password" name="senha" placeholder="Senha" id="senha">
            <input type="submit" value="Enviar" id="sub">
        </form>
    </main>
</body>
</html>