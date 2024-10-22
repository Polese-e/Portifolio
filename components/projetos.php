<?php
$projetos = [
    [
        "titulo" => "PC Store",
        "href" => "https://github.com/Polese-e/PC-Store",
        "finalizado" => false,
        "ano" => 2024,
        "descricao" => "PC Store é uma loja virtual de componentes de PC inspirada na loja Terabyte. O sistema oferece funcionalidades como gerenciamento de produtos, carrinho de compras e exibição detalhada dos itens, proporcionando uma experiência intuitiva e prática para os usuários.",
        "stack" => ["PHP", "Laravel", "Blade", "Bootstrap", "Jetstream", "MySQL"],
        "img" => "../img/pc-store.webp"
    ],
    [
        "titulo" => "FreelanceHours",
        "href" => "https://github.com/Polese-e/FreelanceHours",
        "finalizado" => true,
        "ano" => 2024,
        "descricao" => "FreelanceHours é uma plataforma onde freelancers podem encontrar e gerenciar projetos de tecnologia. Usuários podem visualizar projetos disponíveis, categorizados por tecnologias usadas, e enviar suas propostas para participar.",
        "stack" => ["PHP", "Laravel", "Livewire", "Tailwind", "SQLite"],
        "img" => "../img/freelance-hours.webp"
    ],
    [
        "titulo" => "HDC Events",
        "href" => "https://github.com/Polese-e/HDC-Events",
        "finalizado" => true,
        "ano" => 2024,
        "descricao" => "HDC Events é um site para gestão de eventos que permite registrar, visualizar, editar e excluir eventos. Inclui também funcionalidades de autenticação de usuário e filtros de busca para facilitar a organização e o acesso a eventos específicos.",
        "stack" => ["PHP", "Laravel", "Blade", "Tailwind", "Jetstream", "MySQL"],
        "img" => "../img/hdc-events.webp"
    ],
    [
        "titulo" => "Kabum Desktop Scraper",
        "href" => "https://github.com/Polese-e/kabum-desktop-scraper",
        "finalizado" => true,
        "ano" => 2024,
        "descricao" => "Kabum Desktop Scraper é um script que automatiza a coleta de dados de desktops do site Kabum. Utiliza Selenium para scraping e Openpyxl para gerenciamento de dados, facilitando análises de mercado e comparações de preços eficientes.",
        "stack" => ["Python", "Selenium", "Openpyxl"],
        "img" => "../img/kabum-desktop-scraper.png"
    ],
    [
        "titulo" => "Accounting Automation",
        "href" => "https://github.com/Polese-e/accounting-automation",
        "finalizado" => true,
        "ano" => 2024,
        "descricao" => "Accounting Automation é um script que automatiza o processo de entrada de dados de empresas em um portal de contabilidade. Utiliza dados de uma planilha Excel para preencher e submeter formulários no site, simplificando operações contábeis com eficiência e precisão.",
        "stack" => ["Python", "Selenium", "Openpyxl"],
        "img" => "../img/accounting-automation.png"
    ],
];

$languageColors = [
    'PHP'        => 'indigo',       // Cor tradicional do PHP
    'JavaScript' => 'yellow',       // Cor do logo JavaScript
    'JS'         => 'yellow',
    'HTML'       => 'orange',       // Cor associada ao HTML5
    'CSS'        => 'blue',         // Cor associada ao CSS3
    'Laravel'    => 'red',          // Cor do logo Laravel
    'Bootstrap'  => 'violet',       // Cor associada ao Bootstrap
    'Tailwind'   => 'cyan',         // Cor do Tailwind CSS
    'Blade'      => 'pink',         // Cor que representa o Blade Templates
    'Livewire'   => 'teal',         // Cor associada ao Livewire
    'Jetstream'  => 'sky',          // Cor associada ao Jetstream
    'MySQL'      => 'blue',         // Cor tradicional do MySQL mais próxima do azul do logo
    'SQLite'     => 'blue',         // Cor mais vibrante para SQLite
    'Python'     => 'green',        // Cor associada ao Python
    'Selenium'   => 'emerald',      // Cor que simboliza o Selenium
    'Openpyxl'   => 'lime',         // Uma cor diferenciada para Openpyxl
];

$documentationLinks = [
    'PHP'        => 'https://www.php.net/docs.php',
    'Laravel'    => 'https://laravel.com/docs',
    'Blade'      => 'https://laravel.com/docs/blade',
    'Bootstrap'  => 'https://getbootstrap.com/docs',
    'Jetstream'  => 'https://jetstream.laravel.com/',
    'MySQL'      => 'https://dev.mysql.com/doc/',
    'Livewire'   => 'https://laravel-livewire.com/docs',
    'Tailwind'   => 'https://tailwindcss.com/docs',
    'SQLite'     => 'https://www.sqlite.org/docs.html',
    'Python'     => 'https://docs.python.org/3/',
    'Selenium'   => 'https://www.selenium.dev/documentation/en/',
    'Openpyxl'   => 'https://openpyxl.readthedocs.io/en/stable/',
];
?>

<?php foreach ($projetos as $projeto): ?>
<div class="mt-5">
    <div class="bg-slate-800 rounded-lg p-6 flex flex-col md:flex-row items-center hover:shadow-xl hover:scale-105 transition-transform duration-300"
        data-aos="zoom-in">
        <div class="w-full md:w-1/4 mb-6 md:mb-0">
            <a href="">
                <img src="<?= $projeto['img']; ?>" alt="<?= $projeto['titulo']; ?>"
                    class="rounded-lg shadow-lg hover:scale-110 hover:shadow-2xl transition-transform duration-500" />
            </a>
        </div>
        <div class="w-full md:w-3/4 md:pl-6">
            <div class="flex flex-col md:flex-row justify-between mb-4">
                <h3 class="font-semibold text-2xl mb-2 md:mb-0">
                    <a href="<?= $projeto['href'];?>" target="_blank"
                        class="hover:text-cyan-400 transition duration-300">
                        <?= $projeto['titulo']; ?>
                    </a>
                    <span class="text-sm text-gray-400 italic">
                        (
                        <?= $projeto['finalizado'] ? 'finalizado em ' . $projeto['ano'] : 'em desenvolvimento'; ?>
                        )
                    </span>
                </h3>
                <div class="flex flex-wrap gap-2">
                    <?php foreach ($projeto['stack'] as $language): ?>
                    <?php 
                        $color = isset($languageColors[$language]) ? $languageColors[$language] : 'gray';
                        $displayLanguage = $language === 'JS' ? 'JavaScript' : $language;
                        $link = isset($documentationLinks[$language]) ? $documentationLinks[$language] : '#';
                    ?>
                    <a href="<?= $link; ?>" target="_blank" rel="noopener noreferrer"
                        class="bg-<?= $color; ?>-400 text-<?= $color; ?>-900 rounded-md px-2 py-1 font-bold text-xs inline-flex items-center justify-center hover:bg-<?= $color; ?>-500 hover:text-white hover:scale-110 transition duration-300">
                        <?= $displayLanguage; ?>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <p class="leading-7 text-gray-300">
                <?= $projeto['descricao']; ?>
            </p>
        </div>
    </div>
</div>
<?php endforeach; ?>

