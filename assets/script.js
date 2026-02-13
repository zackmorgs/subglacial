const handleNavState = () => {
    let isOpen = false;
    const navToggle = document.getElementById('nav_toggle');
    navToggle.addEventListener('click', () => {
        isOpen = !isOpen;
        const nav = document.getElementById('nav_main');
        nav.classList.toggle('open');
    });
};

const handleActiveNavLink = () => {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('#nav_main .nav-link');
    navLinks.forEach(link => {
        const linkPath = link.getAttribute('href');
        if (linkPath === currentPath) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
};



document.addEventListener('DOMContentLoaded', () => {
    document.body.classList.toggle('loaded');
    handleNavState();
    handleActiveNavLink();
});

ScrollReveal().reveal('#hero_main');
ScrollReveal().reveal('#content_press');
ScrollReveal().reveal('#featured');
ScrollReveal().reveal('p');
ScrollReveal().reveal('.wp-block-list');
ScrollReveal().reveal('.wp-block-image');
ScrollReveal().reveal('#content_spotify');
ScrollReveal().reveal('#content_bandcamp');
ScrollReveal().reveal('#apple_music');
ScrollReveal().reveal('#content_deezer');
ScrollReveal().reveal('h2');
ScrollReveal().reveal('.meta');
ScrollReveal().reveal('#event_services');
ScrollReveal().reveal('#event_content');
ScrollReveal().reveal('.btn');
ScrollReveal().reveal('#content_contact');
ScrollReveal().reveal('#press_kit_content');
ScrollReveal().reveal('#footer_main');