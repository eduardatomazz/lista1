<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisores no Número</title>
</head>

<body>
    <form method="POST" action="">

        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar">Verificar</button>

    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar'])) {

            $i = 1;
            $numero = $_POST['numero'];
            
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<p> $numero x $i = $resultado </p>";
            }
        }
    }
    ?>

</body>

</html>