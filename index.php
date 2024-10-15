<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portifolio</title>
</head>
<body>
    <?php 
    $nome = "Gustavo";
    $saldacao = "olá";
    $titulo = $saldacao . " Portifolio do " . $nome;
    $subtitulo = "seja bem vindo no meu portifolio";

    $ano = "2024";    

    $projeto = "Meu portifolio";
    $finalizado = true;
    $dataDoProjeto = "2024-10-15";
    $descricao = "Meu primeiro portifolio"
    ?>

    <h1><?=$titulo?></h1>
    <p><?=$subtitulo?></p>
    <h1><?=$ano?></h1>
    
</hr>
    <div>
        <h2></=$projeto?></h2>
        <p><?=$descricao?></p>
        <div><?=$dataDoProjeto?></div>

        <div> Projeto
            <?php if($finalizado): ?>
                <span style="color: green">✅Finalizado</span>

            <?php else: ?>
                <span style="color: red">⛔Não Finalizado</span>

                <?php endif; ?>



        </div>

    </div>
    
    

</body>
</html>