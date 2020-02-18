<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Conta</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'ControleRemoto.php';
            
            $c = new ControleRemoto();
            $c->ligar();
            $c->menosVolume();
            $c->abrirMenu();
        ?>
        </pre>
    </body>
</html>