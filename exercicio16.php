<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Votar</title>
</head>

<body>
    <form method="POST" action="">

        <label for="numero">Digite o nome:</label>
        <input type="text" id="text" name="text" required>
        <label for="numero">Digite a idade:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="enviar_idade">Enviar</button>


    </form>
     
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar_idade'])) {
            
            $idade = $_POST['numero'];
            if($idade >= 16 ){
                echo "Você pode votar";
            } else {
                if($idade < 16){
                    echo"Você não pode votar";
                }
            }
            
        }
    }
    ?>

</body>

</html>