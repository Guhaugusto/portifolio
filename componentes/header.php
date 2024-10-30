
<?php 
$itens = [
  ['href' => '#projetos', 'text' => 'Projetos'],
  ['href' => '(link unavailable)', 'text' => 'Github'],
  ['href' => '(link unavailable)', 'text' => 'Linkedin'],
  ['href' => '(link unavailable)', 'text' => 'Instagram']
];
?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex itens-center justify-between">
  <div class="font-bold text-xl text-cyan-600"> Meu Portfólio... </div>
  <div>
    <ul class="flex gap-x-3 font-medium">
      <?php foreach ($itens as $item): ?>
        <li>
          <a href="<?= $item['href'] ?>" target="_blank" class="hover:underline">
            <?= $item['text'] ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</header>
