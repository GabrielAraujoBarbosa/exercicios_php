<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        
        <fieldset>
            <label for="numero1">1º Número:</label>
            <input type="number" name="numero1" id="numero1">
            
            <label for="numero2">2° Número:</label>
            <input type="number" name="numero2" id="numero2">
        </fieldset>

        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];

            echo $numero1;
            echo $numero2;


            echo ($numero1 + $numero2);
        }
    ?>

</body>
</html>