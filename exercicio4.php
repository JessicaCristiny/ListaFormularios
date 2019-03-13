<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>exercicio4</title>
    </head>
    <body>
        <form method="POST" action="calculadora4.php">
            <label for="la1">Campo 1 </label>
            <input id="la1" type="text" name="Campo1"> 
            <select name="operacao">
                <option value="Adicao">Adição</option>
                <option value="Subtracao">Subtração</option>
                <option value="Divisao">Divisão</option>
                <option value="Multi">Multiplicação</option>
            </select>

            <label for="la2"> Campo 2 </label>
            <input id="la2" type="text" name="Campo2"> 
            <button type="submit" value="Calcular"> Calcular </button>
        </form>
        <?php
        
        ?>
    </body>
</html>
