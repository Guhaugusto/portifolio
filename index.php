<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio</title>
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body class="bg-slate-900 text-white">
    
<?php include('./componentes/header.php') ?>

    <main class="mx-auto max-w-screen-lg  min-h-20 px-3 gap-y-6">

    <?php include('./componentes/hero.php') ?>
    
    <section class="space-y-3 py-6" id="projetos">

        <h2 class="text-2xl font-bold">Meus projetos</h2>

        <?php include('./componentes/projetos.php') ?>

    </section>

    <footer class="mx-auto maw-w-screen-lg min-h-20"> 

    <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm">
    
    © Copyright <?=date('Y')?>. Criado por mim </div>

    </footer>
</body>
</html>