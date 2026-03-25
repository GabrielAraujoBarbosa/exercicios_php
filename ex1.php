<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mediaAluno1 = ( ($_POST["aluno1_nota1"] ?? 0) + ($_POST["aluno1_nota2"] ?? 0) ) / 2;

            $mediaAluno2 = ( ($_POST["aluno2_nota1"] ?? 0) + ($_POST["aluno2_nota2"] ?? 0) ) / 2;

            $mediaAluno3 = ( ($_POST["aluno3_nota1"] ?? 0) + ($_POST["aluno3_nota2"] ?? 0) ) / 2;

            $mediaAluno4 = ( ($_POST["aluno4_nota1"] ?? 0) + ($_POST["aluno4_nota2"] ?? 0) ) / 2;

            $mediaAluno5 = ( ($_POST["aluno5_nota1"] ?? 0) + ($_POST["aluno5_nota2"] ?? 0) ) / 2;

            $mediaAluno6 = ( ($_POST["aluno6_nota1"] ?? 0) + ($_POST["aluno6_nota2"] ?? 0) ) / 2;
        }
    ?>

    <form action="" method="post">
        
        <fieldset>
            <legend>Aluno 1</legend>
            <label for="aluno1_nota1">1º Nota:</label>
            <input type="number"  name="aluno1_nota1" id="aluno1_nota1" required>

            <label for="aluno1_nota2">2° Nota:</label>
            <input type="number" name="aluno1_nota2" id="aluno1_nota2" required>

            <br>
            <span>Média : <?php echo $mediaAluno1 ?? ''; ?></span>
            
            <br>
            <span></span>
        </fieldset>

        <fieldset>
            <legend>Aluno 2</legend>
            <label for="aluno2_nota1">1º Nota:</label>
            <input type="number" name="aluno2_nota1" id="aluno2_nota1" required>
            
            <label for="aluno2_nota2">2° Nota:</label>
            <input type="number" name="aluno2_nota2" id="aluno2_nota2" required>

            <br>
            <span>Média : <?php echo $mediaAluno2 ?? ''; ?></span>
        </fieldset>

        <fieldset>
            <legend>Aluno 3</legend>
            <label for="aluno3_nota1">1º Nota:</label>
            <input type="number" name="aluno3_nota1" id="aluno3_nota1" required>
            
            <label for="aluno3_nota2">2° Nota:</label>
            <input type="number" name="aluno3_nota2" id="aluno3_nota2" required>

            <br>
            <span>Média : <?php echo $mediaAluno3 ?? ''; ?></span>
        </fieldset>

        <fieldset>
            <legend>Aluno 4</legend>
            <label for="aluno4_nota1">1º Nota:</label>
            <input type="number" name="aluno4_nota1" id="aluno4_nota1" required>
            
            <label for="aluno4_nota2">2° Nota:</label>
            <input type="number" name="aluno4_nota2" id="aluno4_nota2" required>

            <br>
            <span>Média : <?php echo $mediaAluno4 ?? ''; ?></span>
        </fieldset>

        <fieldset>
            <legend>Aluno 5</legend>
            <label for="aluno5_nota1">1º Nota:</label>
            <input type="number" name="aluno5_nota1" id="aluno5_nota1" required>
            
            <label for="aluno5_nota2">2° Nota:</label>
            <input type="number" name="aluno5_nota2" id="aluno5_nota2" required>
            
            <br>
            <span>Média : <?php echo $mediaAluno5 ?? ''; ?></span>
        </fieldset>

        <fieldset>
            <legend>Aluno 6</legend>
            <label for="aluno6_nota1">1º Nota:</label>
            <input type="number" name="aluno6_nota1" id="aluno6_nota1" required>
            
            <label for="aluno6_nota2">2° Nota:</label>
            <input type="number" name="aluno6_nota2" id="aluno6_nota2" required>
            
            <br>
            <span>Média : <?php echo $mediaAluno6 ?? ''; ?></span>
        </fieldset>

        <button type="submit">Enviar</button>
    </form>

    

</body>
</html>