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

            for ($i = 1; $i <= 10; $i++) {
                
                $mediaAlunos[i] = calcularMedia( ($_POST[${'aluno' . $i . '_nota1'}] ?? 0), ($_POST[${'aluno' . $i . '_nota2'}] ?? 0) );

                $situacaoAlunos[i] = obterSituacao($mediaAlunos[i]);
            }

            function calcularMedia($nota1, $nota2) {
                return ($nota1 + $nota) / 2;
            }

            function obterSituacao($mediaAluno) {
                if ($mediaAluno < 3) {
                    return 'Reprovado';
                }
                else if ($mediaAluno < 8) {
                    return 'Exame';
                }
                else {
                    return 'Aprovado';
                }
            }
        }
    ?>

    <form action="" method="post">
        
        <fieldset>
            <legend>Aluno 1</legend>
            <label for="aluno1_nota1">1º Nota:</label>
            <input type="number" min="0" max="10" name="aluno1_nota1" id="aluno1_nota1" required>

            <label for="aluno1_nota2">2° Nota:</label>
            <input type="number" min="0" max="10" name="aluno1_nota2" id="aluno1_nota2" required>

            <br>
            <span>Média : <?php echo $mediaAlunos[0] ?? ''; ?></span>
            
            <br>
            <span>Situação : <?php echo $situacaoAlunos[0] ?? ''; ?></span>
        </fieldset>

        <fieldset>
            <legend>Aluno 2</legend>
            <label for="aluno2_nota1">1º Nota:</label>
            <input type="number" min="0" max="10" name="aluno2_nota1" id="aluno2_nota1" required>
            
            <label for="aluno2_nota2">2° Nota:</label>
            <input type="number" min="0" max="10" name="aluno2_nota2" id="aluno2_nota2" required>

            <br>
            <span>Média : <?php echo $mediaAlunos[1] ?? ''; ?></span>

            <br>
            <span>Situação : <?php echo $situacaoAlunos[1] ?? ''; ?></span>
        </fieldset>

        <fieldset>
            <legend>Aluno 3</legend>
            <label for="aluno3_nota1">1º Nota:</label>
            <input type="number" min="0" max="10" name="aluno3_nota1" id="aluno3_nota1" required>
            
            <label for="aluno3_nota2">2° Nota:</label>
            <input type="number" min="0" max="10" name="aluno3_nota2" id="aluno3_nota2" required>

            <br>
            <span>Média : <?php echo $mediaAlunos[2] ?? ''; ?></span>

            <br>
            <span>Situação : <?php echo $situacaoAlunos[2] ?? ''; ?></span>
        </fieldset>

        <fieldset>
            <legend>Aluno 4</legend>
            <label for="aluno4_nota1">1º Nota:</label>
            <input type="number" min="0" max="10" name="aluno4_nota1" id="aluno4_nota1" required>
            
            <label for="aluno4_nota2">2° Nota:</label>
            <input type="number" min="0" max="10" name="aluno4_nota2" id="aluno4_nota2" required>

            <br>
            <span>Média : <?php echo $mediaAlunos[3] ?? ''; ?></span>

            <br>
            <span>Situação : <?php echo $situacaoAlunos[3] ?? ''; ?></span>
        </fieldset>

        <fieldset>
            <legend>Aluno 5</legend>
            <label for="aluno5_nota1">1º Nota:</label>
            <input type="number" min="0" max="10" name="aluno5_nota1" id="aluno5_nota1" required>
            
            <label for="aluno5_nota2">2° Nota:</label>
            <input type="number" min="0" max="10" name="aluno5_nota2" id="aluno5_nota2" required>
            
            <br>
            <span>Média : <?php echo $mediaAlunos[4] ?? ''; ?></span>

            <br>
            <span>Situação : <?php echo $situacaoAlunos[4] ?? ''; ?></span>
        </fieldset>

        <fieldset>
            <legend>Aluno 6</legend>
            <label for="aluno6_nota1">1º Nota:</label>
            <input type="number" min="0" max="10" name="aluno6_nota1" id="aluno6_nota1" required>
            
            <label for="aluno6_nota2">2° Nota:</label>
            <input type="number" min="0" max="10" name="aluno6_nota2" id="aluno6_nota2" required>
            
            <br>
            <span>Média : <?php echo $mediaAluno6 ?? ''; ?></span>

            <br>
            <span>Situação : <?php echo $situacaoAlunos[2] ?? ''; ?></span>
        </fieldset>

        <button type="submit">Enviar</button>
    </form>

    

</body>
</html>