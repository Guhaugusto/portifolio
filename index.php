
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
</head>
<body>
    <?php 
    $nome = "Gustavo";
    $saldacao = "Olá";
    $titulo = $saldacao . " Portfólio do " . $nome;
    $subtitulo = "Seja bem-vindo ao meu portfólio";
    $ano = "2024";    

    $projetos = [
        [
            "titulo" => "Meu portfólio", 
            "finalizado" => false,
            "data"=> "2024-10-16",
            "descricao" => "Meu primeiro portfólio. Escrito em PHP e HTML",
        ],
        [
            "titulo" => "Lista de Tarefas", 
            "finalizado" => true,
            "data"=> "2024-10-17",
            "descricao" => "Lista de tarefas. Escrito em PHP e HTML",
        ],
        [
            "titulo" => "Controle de Leitura de Livros", 
            "finalizado" => true,
            "data"=> "2024-10-17",
            "descricao" => "Lista de Livros. Escrito em PHP e HTML",
        ],
        [
            "titulo" => "Mais um Projeto", 
            "finalizado" => false,
            "data"=> "2025-05-11",
            "descricao" => "Mais um Projeto. Escrito em PHP e HTML",
        ],
    ];

    function filtraProjetos($listaDeProjetos, $finalizado = true) {
        $filtrados = [];

        foreach ($listaDeProjetos as $projeto) {

            if ( ! is_null($finalizado) && $projeto['finalizado'] === $finalizado){

                $filtrados []= $projeto;
            }
        }
       return $filtrados;
    }

    function verificarseEstaFinalizado($p) {
        if ($p['finalizado']) {
            echo '<span style="color: green">✅ Finalizado</span>';
        } else {
            echo '<span style="color: red">⛔ Não Finalizado</span>';
        }

    };
       
    ?>


    <h1><?=$titulo?></h1>
    <p><?=$subtitulo?></p>
    <h2>Ano: <?=$ano?></h2>

    <h3>Projetos</h3>
    <ul>
        <?php foreach (filtraProjetos($projetos) as $projeto): ?>
            <li>
                <h4><?=$projeto['titulo']?></h4>
                <p><?=$projeto['descricao']?></p>
                <div>Data: <?=$projeto['data']?></div>
                <div>Projeto: <?php verificarseEstaFinalizado($projeto); ?></div>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
