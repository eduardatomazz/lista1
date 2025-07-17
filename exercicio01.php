<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa Par ou Ímpar</title>
</head>

<body>
    <form method="POST" action="">

        <label for="numero_par">Verifica se é número par ou ímpar:</label>
        <input type="number" id="numero_par" name="numero_par" required>
        <button type="submit" name="Verificar_numero">Verificar</button>

    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['Verificar_numero'])) {

            $numero = $_POST['numero_par'];

            if ($numero % 2 == 0) {
                $ehpar = true;
                echo "O número $numero é par ";
            } else {

                if ($numero % 2 != 0) {
                    $ehpar = false;
                    echo "O número $numero é ímpar";
                }
            }
        }
    }
    ?>
</body>

</html>