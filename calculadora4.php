<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>calculadora4</title>
        <form method="POST" action="exercicio4.php">
    </head>
    <body>
        <?php
        $campo1 = $_POST ["Campo1"];
        $campo2 = $_POST ["Campo2"];
        $operacao = $_POST ["operacao"] ; 
       
            if($operacao == "Adicao"){
               $calculadora = $campo1 + $campo2; 
               echo "O resultado dessa operação é: " .$calculadora ;
            } elseif ($operacao == "Subtracao"){
                $calculadora = $campo1 - $campo2;
                echo "O resultado dessa operação é: " .$calculadora ;
            } elseif ($operacao == "Divisao"){
                $calculadora = $campo1 / $campo2;
                echo "O resultado dessa operação é: " .$calculadora ;
            }elseif ($operacao == "Multi"){
                $calculadora = $campo1 * $campo2;
                echo "O resultado dessa operação é: " .$calculadora ;
            }
             
            
            
        ?>
    </body>
</html>
