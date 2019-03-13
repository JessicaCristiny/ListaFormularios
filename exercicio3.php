<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>exercicio3</title>
    </head>
    <body>
        
        <h1> Abra uma conta </h1>
        
        <p> É gratuito e sempre será </p>
        <form action ="Face2.php" methody ="POST"><br>
            <label for="la1" > Nome:</label>
            <input  id="la1" type="text" name="nome"><br>
            
            <label for="la2" > Sobrenome</label>
            <input id="la2" type="text" name="sobrenome"><br>
            
            <label for="la3" > Email ou numero de telefone</label>
            <input id="la3" type="text" name="email"><br>
            
            <label for="la4" > Insira novamente o email ou numero do telefone</label>
            <input id="la4" type="text" name="tele"><br>
            
            <label for="la5" > Nova senha</label>
            <input id="la5" type="password" name="senha"><br>
      
            <h1> Aniversário </h1>
            
            <select>
                <option> Dia </option>
                <?php 
                for ($i = 1; $i <= 31; $i++){
                    echo "<option> $i </option>";
                }
                    
                ?>
            </select>
            <select>
                <option> Mês </option>
                <?php
                    $vetor= array ();

                    $vetor[0] = "Janeiro";
                    $vetor[1] = "Fevereiro";
                    $vetor[2] = "Março";
                    $vetor[3] = "Abril";
                    $vetor[4] = "Maio"; 
                    $vetor[5] = "Junho";
                    $vetor[6] = "Julho"; 
                    $vetor[7] = "Agosto"; 
                    $vetor[8] = "Setembro";
                    $vetor[9] = "Outubro";
                    $vetor[10] = "Novembro";
                    $vetor[11] = "Dezembro";
                    
               
                ?>
                    <?php for($i=0; $i <12; $i++) {?>
                    <option> <?php echo $vetor[$i]?></option>
                    <?php } ?>
            </select>
            <select>
                <option> Ano</option>
                <?php 
                for ($i = 2016; $i >= 1905; $i--){
                    echo "<option> $i </option>";
                }
                    
                ?>
            </select><br />
            <label for="L1" > Feminino</label>
            <input id = "L1" type="radio" name="sexo" value="M">
            <label for="L2" > Masculuno </label>
            <input id ="L2" type="radio" name="sexo" value="F"><br>
            
            <button type="submit" value="Abrir uma conta"> Abrir uma Conta </button>
        </form>
    
    
        
    </body>
</html>

