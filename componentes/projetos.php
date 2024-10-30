<?php
$projetos = [
    ["titulo" => "Meu portfólio", "finalizado" => false, "ano" => "2024", "descricao" => "Meu primeiro portfólio. Escrito em PHP e HTML", "stack" => ["PHP", "HTML", "CSS", "JS"], "img" => "/img/projeto.png"],
    ["titulo" => "Lista de Tarefas", "finalizado" => true, "ano" => "2024", "descricao" => "Lista de tarefas. Escrito em PHP e HTML", "stack" => ["PHP", "HTML", "CSS", "JS"], "img" => ""],
    ["titulo" => "Controle de Leitura de Livros", "finalizado" => true, "ano" => "2024", "descricao" => "Lista de Livros. Escrito em PHP e HTML", "stack" => ["PHP", "HTML", "CSS", "JS"], "img" => ""],
    ["titulo" => "Mais um Projeto", "finalizado" => false, "ano" => "2025", "descricao" => "Mais um Projeto. Escrito em PHP e HTML", "stack" => ["PHP", "HTML", "CSS", "JS"], "img" => ""],
];

$colors = ['violet', 'yellow', 'orange', 'blue'];

foreach ($projetos as $projeto) : ?>
    <div class="bg-slate-800 rounded-lg p-3 flex items-center soace-x-3">
        <div class="w-1/5 flex items-center justify-niddle">
            <img src="<?= $projeto['img'] ?>" class="h-42 rounded-md">
        </div>
        <div class="w-4/5 space-y-3">
            <div class="flex gap-3">
                <h3 class="font-semibold text-xl">
                    <?php if ($projeto['finalizado']): ?>✅ <?php endif; ?>
                <?= $projeto['titulo'] ?>
                <?php if ($projeto['finalizado']): ?>
                    <span class="text-xs text-gray-400 opacity-50 italic">( finalizado em <?= $projeto['ano'] ?> )</span>
                <?php else: ?>
                    <span class="text-xs text-gray-400 opacity-50 italic">( em desenvolvimento )</span>
                <?php endif; ?>
                </h3>
                <div class="space-x-1">
                    <?php foreach ($projeto['stack'] as $posicao => $language) : ?>
                        <span class="bg-<?= $colors[$posicao] ?>-500 text-<?= $colors[$posicao] ?>-900 rounded-md px-2 py-1 font-medium text-xs uppercase">
                            <?= $language ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            </div>
            <p class="leading-6"><?= $projeto['descricao'] ?></p>
        </div>
    </div>
<?php endforeach; ?>