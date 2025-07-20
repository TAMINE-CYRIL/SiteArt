const accordions = document.querySelectorAll('.accordion');
const reseaux = document.getElementsByClassName('reseau');

accordions.forEach(button => {
    button.addEventListener('click', () => {
        const panel = button.nextElementSibling;
        panel.classList.toggle('show');
    });
});


function affichagePseudo(i) {
    const reseaux = document.getElementsByClassName('reseau');
    if (reseaux[i]) {
        reseaux[i].innerHTML = "@Xanowshcv05";
    }
}

function resetPseudo(i) {
    const reseaux = document.getElementsByClassName('reseau');
    if (reseaux[i]) {
        // Remets le nom d'origine
        reseaux[i].innerHTML = (i === 0) ? "Twitter/X" : "TikTok";
    }
}

var prevScrollpos = window.scrollY;
window.onscroll = function() {
    var currentScrollPos = window.scrollY;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navigation").style.top = "0";
    } else {
        document.getElementById("navigation").style.top = "-50%";
    }
    prevScrollpos = currentScrollPos;
}

