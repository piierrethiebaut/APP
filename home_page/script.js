document.addEventListener("DOMContentLoaded", function() {
    // Afficher le voile avec un fondu en entrée
    fadeIn(document.getElementById("overlay"), 4);
    
    // Fonction pour afficher le voile avec un fondu en entrée
    function fadeIn(element, duration) {
        element.style.display = "block";
        element.style.opacity = 0;
        let startTime = null;
        function fadeStep(timestamp) {
            if (!startTime) startTime = timestamp;
            const progress = timestamp - startTime;
            element.style.opacity = progress / duration;
            if (progress < duration) {
                requestAnimationFrame(fadeStep);
            }
        }
        requestAnimationFrame(fadeStep);
    }

    // Afficher le message "Bienvenue" lettre par lettre avec un délai entre chaque lettre
    const welcomeMessage = document.querySelector(".welcome-message");
    welcomeMessage.style.display = "block";
    const messageText = welcomeMessage.textContent;
    welcomeMessage.textContent = "";
    let index = 0;
    const interval = setInterval(function() {
        welcomeMessage.textContent += messageText[index];
        index++;
        if (index === messageText.length) {
            clearInterval(interval);
            // Fondu en sortie du voile
            fadeOut(document.getElementById("overlay"), 4);
        }
    }, 50); // Définir un délai plus long entre chaque lettre

    // Fonction pour masquer le voile avec un fondu en sortie
    function fadeOut(element, duration) {
        let startTime = null;
        function fadeStep(timestamp) {
            if (!startTime) startTime = timestamp;
            const progress = timestamp - startTime;
            element.style.opacity = 1 - (progress / duration);
            if (progress < duration) {
                requestAnimationFrame(fadeStep);
            } else {
                element.style.display = "none";
            }
        }
        requestAnimationFrame(fadeStep);
    }
});


/*déroulant "moncompte"  */

const monCompteBtn = document.getElementById('monCompteBtn');
const monComptePanel = document.getElementById('monComptePanel');

monCompteBtn.addEventListener('click', () => {
    monComptePanel.classList.toggle('open');
});


// Lit les éléments concernés par les id
const button = document.getElementById('myButton');
const div = document.getElementById('myDiv');

// ajoute un "click event listener" au button pour l'apparition du div
button.addEventListener('click', () => {
 	if (div.style.display === 'inline-block') {
		div.style.display = 'none';
	} else {
		div.style.display = 'inline-block';
	}
});

// Donne des informations sur la page d'accueil de façon plus dynamique
const texte_presentation = document.getElementById('texte_presentation');

const section_maison = document.getElementById('section_maison');
const section_atelier = document.getElementById('section_atelier');
const section_appartement = document.getElementById('section_appartement');

section_maison.addEventListener('click', () => {
	texte_presentation.innerHTML = "Dans votre spacieuse demeure, nous vous offrons la possibilité de doter chaque coin stratégique decapteurs sonores. Du jardin au garage, de la cuisine à la salle de réception, notre solution assure une surveillance sonore exhaustive, garantissant votre tranquillité sur toute la surface de votre propriété tout en tenant compte de la proximité avec le voisinage";
});
