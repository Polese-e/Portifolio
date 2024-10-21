<?php 
    $itens = [
        ['href' => '#projetos', 'texto' => 'Projetos'],
        ['href' => 'https://github.com/Polese-e', 'texto' => 'Github'],
        ['href' => 'https://www.linkedin.com/in/polese-e/', 'texto' => 'Linkedin'],
        ['href' => 'https://wa.me/qr/PX244DM2FE7IG1', 'texto' => 'WhatsApp'],
        ['href' => 'https://www.instagram.com/polese_e/', 'texto' => 'Instagram'],
    ]
?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between border-b border-gray-700">
    <div class="font-bold text-xl font-mono text-cyan-600 hover:text-cyan-400 transition duration-300 cursor-pointer">
        Meu Portfólio
    </div>
    <nav>
        <ul class="flex gap-x-6 font-medium">
            <?php foreach($itens as $item): ?>
                <li><a href="<?=$item['href']?>" class="hover:text-cyan-400 transition duration-300"><?=$item['texto']?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>