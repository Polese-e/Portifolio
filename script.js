AOS.init({
    duration: 2000,
    once: true,
});

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

