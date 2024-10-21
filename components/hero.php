<?php 
    $itens = [
        ['href' => 'https://www.linkedin.com/in/polese-e/', 'src' => 'assets/linkedin.png', 'Alt' => 'Linkedin Logo'],
        ['href' => 'https://github.com/Polese-e', 'src' => 'assets/github.png', 'Alt' => 'Github Logo'],
        ['href' => 'https://wa.me/qr/PX244DM2FE7IG1', 'src' => 'assets/whatsapp.png', 'Alt' => 'WhatsApp Logo'],
        ['href' => 'https://www.instagram.com/polese_e/', 'src' => 'assets/instagram.png', 'Alt' => 'Instagram Logo'],
    ]
?>

<section class="flex flex-col-reverse md:flex-row items-center gap-x-10">
    <div class="w-full md:w-2/3 my-12" data-aos="fade-right">
        <h1 class="text-4xl font-bold mb-4">Olá, meu nome é Enzo!</h1>
        <p class="text-xl leading-7 mb-6">
            Sou um desenvolvedor de software autodidata, apaixonado por aprender e resolver problemas de forma
            criativa, sempre buscando novos desafios e oportunidades para crescer profissionalmente.
        </p>
        <ul class="flex gap-x-6 mt-4">
            <?php foreach($itens as $item): ?>
            <li>
                <a href="<?=$item['href']?>" target="_blank">
                    <img src="<?=$item['src']?>" alt="<?=$item['Alt']?>"
                        class="h-8 hover:scale-125 transition-transform duration-300" />
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="w-full md:w-1/3 flex items-center justify-center mb-12 md:mb-0" data-aos="fade-left">
        <img src="assets/Perfil.png" alt="Foto de Perfil"
            class="rounded-full w-64 h-64 object-cover hover:scale-110 transition-transform duration-500 shadow-lg" />
    </div>
</section>