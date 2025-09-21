<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require __DIR__ . '/../../vendor/autoload.php';
        
        use app\ContaBanco;

        $cliente = new ContaBanco(
            '124521',
            'Corrente',
            'allan'
        );
        var_dump($ContaBanco -> abrirConta());
    ?>
</body>
</html>