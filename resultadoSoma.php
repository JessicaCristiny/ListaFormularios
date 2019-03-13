<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>resultadoSoma</title>
        <form method="POST" action="soma.php">
    </head>
    <body>
        <?php
            $campo1 = $_POST ["Campo1"];
            $campo2 = $_POST ["Campo2"];
            
            $soma = $campo1 + $campo2;
            echo "A soma dos campos resulta em: ".$soma;
        ?>
    </body>
</html>
