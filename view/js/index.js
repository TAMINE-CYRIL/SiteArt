const accordions = document.querySelectorAll('.accordion');
accordions.forEach(button => {
    button.addEventListener('click', () => {
        const panel = button.nextElementSibling;
        panel.classList.toggle('show');
    });
});