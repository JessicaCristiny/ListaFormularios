<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        
        <form method="POST" action="exercicio2.php">
        <title>MaiorPares2</title>
    </head>
    <body>
       
        
        
        <?php
       
        $campo1 = $_POST ["campo1"];
        $campo2 = $_POST ["campo2"];
        $campo3 = $_POST ["campo3"];
        $campo4 = $_POST ["campo4"];
        $campo5 = $_POST ["campo5"];
        
        $vetorC= array();
        $vetorC [0]= $campo1 ;
        $vetorC [1]= $campo2 ;
        $vetorC [2]= $campo3 ;
        $vetorC [3]= $campo4 ;
        $vetorC [4]= $campo5 ;
        
        $maior = 0;
       
       
        for($i= 0; $i < count ($vetorC); $i++){
         
            //maior elemento 
          if ($vetorC[$i] > $maior) {
              $maior = $vetorC[$i];
          }
            
        }
        
       echo "O maior número é: " . $maior ."<br>"; 
       
                 //pares 
       
       for ($i=0; $i< count ($vetorC); $i++) {
           
           if ($vetorC [$i] % 2 ==0) {
              
         echo " Os números pares são :" . $vetorC[$i] ."<br>";
           }
           
           
           
       }
      
       ?>
        
        
      
    </body>
</html>

