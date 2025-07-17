<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informar Número Positivou ou Negativo</title>
</head>
<body>
    <form method="POST" action="">

        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_numero">Verificar</button>

    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar_numero'])) {

            $numero = $_POST['numero'];

            if ($numero > 0) {
                $resultado = true;
                echo "O número $numero é positivo ";
            } else {

                if ($numero < 0) {
                    $resultado = false;
                    echo "O número $numero é negativo";
                }

                if($numero == 0){
                   echo "O número $numero é zero";
                }
            }
        }
    }
    ?>
</body>

</html>