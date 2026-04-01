<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $mediaAlunos = [];
        $situacaoAlunos = [];

        function calcularMedia($nota1, $nota2) {
            return ($nota1 + $nota2) / 2;
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

        if ($_SERVER["REQUEST_METHOD"] == "POST") {


            for ($i = 1; $i <= 6; $i++) {
                $mediaAlunos[] = calcularMedia( ($_POST["aluno{$i}_nota1"] ?? 0), ($_POST["aluno{$i}_nota2"] ?? 0) );

                $situacaoAlunos[] = obterSituacao($mediaAlunos[$i - 1]);
            }
        }
    ?>

    <form action="" method="post">
        

        <?php
            for ($i=0; $i <= 5; $i++) { 
                echo "<fieldset>
                    <legend>Aluno " . ($i+1) . "</legend>"; 
                    
                    for ($j=1; $j <= 2; $j++) {
                        $nome = "aluno" . ($i + 1) . "_nota{$j}"; 
                        echo "<label for='$nome'>{$j}º Nota:</label>
                        <input type='number' min='0' max='10' name='$nome' id='$nome' required>";
                    }

                    echo "<br>";

                    
                    echo "<span>Média : " . ($mediaAlunos[$i] ?? '');
                    
                    echo "<br>";

                    ;
                    echo "<span>Situação : " . ($situacaoAlunos[$i] ?? '') . "</span>";
                
                echo "</fieldset>";
            }
        ?>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>