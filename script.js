// Inicialização da biblioteca AOS
AOS.init({
    duration: 1000, // Duração da animação em milissegundos
    once: true,     // Se verdadeiro, a animação ocorre apenas uma vez ao rolar
});

// Efeito de scroll suave para links internos
const links = document.querySelectorAll('a[href^="#"]');

for (const link of links) {
    link.addEventListener('click', function (e) {
        e.preventDefault();

        const targetID = this.getAttribute('href');
        const targetSection = document.querySelector(targetID);

        targetSection.scrollIntoView({
            behavior: 'smooth',
            block: 'start',
        });
    });
}
