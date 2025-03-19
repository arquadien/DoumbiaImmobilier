document.addEventListener("DOMContentLoaded", () => {
    const titleElement = document.getElementById("animated-title");
    const titleText = "DOUMBIA Immobilier";
    let index = 0;
    let titleAnimationStarted = false;

    function typeLetter() {
        if (index < titleText.length) {
            titleElement.textContent += titleText.charAt(index);
            index++;
            setTimeout(typeLetter, 250); // Vitesse d'écriture (250ms par lettre)
        }
    }

    // IntersectionObserver pour détecter quand la section est visible
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !titleAnimationStarted) {
                titleAnimationStarted = true;
                typeLetter();
            }
        });
    }, {
        threshold: 0.5 // Déclenche quand 50% de l'élément est visible
    });

    // Observer l'élément contenant le titre
    observer.observe(titleElement);
});

/*document.addEventListener("DOMContentLoaded", () => {
    const titleElement = document.getElementById("animated-title");
    const titleText = "DOUMBIA Immobilier";
    let index = 0;

    function typeLetter() {
        if (index < titleText.length) {
            titleElement.textContent += titleText.charAt(index);
            index++;
            setTimeout(typeLetter, 250); // Vitesse d'écriture (100ms par lettre)
        }
    }

    typeLetter();
});
*/