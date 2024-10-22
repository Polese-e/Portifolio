<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meu Portfólio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
</head>

<body class="bg-slate-900 text-gray-200 font-nunito">
    <?php include('./components/header.php') ?>
    <main class="mx-auto max-w-screen-lg px-3 py-6">
        <?php include('./components/hero.php') ?>
        <section id="projetos">
            <h2 class="text-3xl font-bold mb-6 text-center" data-aos="fade-up">Meus Projetos</h2>
            <?php include('./components/projetos.php') ?>
        </section>
    </main>

    <!-- Footer -->
    <footer class="mx-auto max-w-screen-lg py-6">
        <div class="border-t border-gray-700 text-gray-400 pt-6 text-center">
            © Copyright 2024. Contruindo com ☕ e dedicação.
        </div>
    </footer>

    <!-- AOS Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- Custom JavaScript -->
    <script src="script.js" defer></script>
</body>

</html>