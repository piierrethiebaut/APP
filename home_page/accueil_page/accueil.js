

// Donne des informations sur la page d'accueil de façon plus dynamique
const texte_presentation = document.getElementById('texte_presentation');
const texte_presentation_div = document.getElementById('texte_presentation_div');

const section_maison = document.getElementById('section_maison');
const section_atelier = document.getElementById('section_atelier');
const section_appartement = document.getElementById('section_appartement');

section_maison.addEventListener('click', () => {
	if(texte_presentation_div.style.display === "") {
		texte_presentation_div.style.display = 'flex';
	}
	texte_presentation.innerHTML = "Dans votre spacieuse demeure, nous vous offrons la possibilité de doter chaque coin stratégique decapteurs sonores. Du jardin au garage, de la cuisine à la salle de réception, notre solution assure une surveillance sonore exhaustive, garantissant votre tranquillité sur toute la surface de votre propriété tout en tenant compte de la proximité avec le voisinage";
});

section_appartement.addEventListener('click', () => {
	if(texte_presentation_div.style.display === "") {
		texte_presentation_div.style.display = 'flex';
	}
	texte_presentation.innerHTML = "Dans votre appartement, notre solution de surveillance sonore offre une protection complète, des capteurs stratégiquement positionnés, du salon à la chambre. Vous aurez l'esprit tranquille, que ce soit pour un dîner intime ou une réception animée. Nos capteurs veillent également à ne pas perturber votre voisinage, tandis que leur fonction de détection des bruits uspects assure votre sécurité face aux intrusions éventuelles";
});

section_atelier.addEventListener('click', () => {
	if(texte_presentation_div.style.display === "") {
		texte_presentation_div.style.display = 'flex';
	}
	texte_presentation.innerHTML = "Dans votre atelier où la productivité est primordiale, notre solution de surveillance sonore est spécialement conçue pour répondre à vos besoins. Nos vous assurent une tranquillité d’esprit pour ne pas perturber le rythme de vos activités ou celles de vos collègues";
});
