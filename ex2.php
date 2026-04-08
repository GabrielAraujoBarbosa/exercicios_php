<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio2</title>
</head>
<body>
    <?php
    	function validarNumeroMesa ($numeroMesa) {
    		if ($numeroMesa <= 40 && $numeroMesa >= 1) {
    			return true;
    		}
    		else {
    			return false;
    		}
    	}

    	function validarQuantidadeLugares ($quantidadeLugares) {
    		if ($quantidadeLugares <= 6 && $quantidadeLugares >= 1) {
    			return true;
    		}
    		else {
    			return false;
    		}
    	}

    	function validarSeLugaresEstaoReservados($numeroMesa, $quantidadeLugares) {
    		for ($i=0; $i < $quantidadeLugares - 1; $i++) { 
				if ($mesas[$numeroMesa - 1][$i] == 1) {
					return true;
				}
			}
			return false;
    	}

    	function preencherLugaresMesa ($numeroMesa, $quantidadeLugares) {
    		for ($i=0; $i < $quantidadeLugares - 1; $i++) { 
				$mesas[$numeroMesa - 1][$i] = 1;
			}
    	}

    	GLOBAL $resposta = "";

    	GLOBAL $mesas = array_fill( 0, 40, array_fill(0, 6, 0) );

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $numeroMesa = $_POST["numeroMesa"] ?? 0;
			$quantidadeLugares = $_POST["quantidadeLugares"] ?? 0;

			$numeroMesa_quantidadeLugares_valido = validarNumeroMesa($numeroMesa) && validarQuantidadeLugares($quantidadeLugares);
			
			if ($numeroMesa_quantidadeLugares_valido) {
				// mesa e quantidadeCadeiras válido

				$lugaresEstaoReservados = validarSeLugaresEstaoReservados($numeroMesa, $quantidadeLugares); 

				if (!$lugaresEstaoReservados) {
					// lugares ainda não preenchidos
					preencherLugaresMesa($numeroMesa, $quantidadeLugares);
					$resposta = "$quantidadeLugares cadeiras foram reservadas para você na mesa $numeroMesa";

				}
				else {
					// lugares já preenchidos
					$resposta = "Lugares já foram reservados! Tente outra mesa ou uma quantidade de lugares menor!";
				}

			}
			else {
				// numeroMesa ou quantidade Lugares inválido
				$resposta = "Número da Mesa ou Quantidade de Lugares Inválido!";
			}

        }

        print_r($mesas);
    ?>

    <form action="" method="post">
    	<label for="numeroMesa">Mesa:</label>
        <input type="number" name="numeroMesa" id="numeroMesa">
        <br>
        <label for="quantidadeLugares">Quantidade de Lugares:</label>
		<input type="number" name="quantidadeLugares" id="quantidadeLugares">
		<br>
        <button type="submit">Enviar</button>
    </form>
    <p><?php echo $resposta; ?></p>
</body>
</html>
