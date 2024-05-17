const thiebaut = document.getElementById('thiebaut');
const mehdi = document.getElementById('mehdi');

const equipe_texte = document.getElementById('equipe-texte');
const profil_titre = document.getElementById('profil-titre');

thiebaut.addEventListener('click', () => {
	profil_titre.innerHTML = "Pierre";
	equipe_texte.innerHTML = "Pierre est notre responsable design à l’origine de la création et des idées pour le front end ainsi que de l’organisation générale du site afin d’optimiser au maximum l’expérience client.";
});

mehdi.addEventListener('click', () => {
	profil_titre.innerHTML = "Mehdi";
	equipe_texte.innerHTML = "Mehdi est notre responsable technique qui s’occupe de veiller au bon fonctionnement du site que ce soit d’un point de vue optimisation ou débogage. Il gère le backend, la base de données avec l’affichage de ses informations sur l’interface graphique, et il intervient aussi dans le frontend en général. Il gère aussi l'organisation du site web pour la conformité au modèle MVC.";
});

terrence.addEventListener('click', () => {
	profil_titre.innerHTML = "Terrence";
	equipe_texte.innerHTML = "Terrence à pour mission de créer les interfaces graphiques sur la page client et admin recueillant toutes les informations concernant soit dans un premier temps les données du client soit pour l’admin les données de chaque client ayant un compte sur son site.";
});

houssam.addEventListener('click', () => {
	profil_titre.innerHTML = "Houssam";
	equipe_texte.innerHTML = "Houssam s’est occupé de réunir un maximum de question pour créer une page FAQ fonctionnelle et interactive.";
});

amine.addEventListener('click', () => {
	profil_titre.innerHTML = "Amine";
	equipe_texte.innerHTML = "Amine s’est occupé de créer la page de devis interactive pour permettre au client de gagner du temps et de se fixer un budget lorsqu’il décide de nous faire confiance.";
});
