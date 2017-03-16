Site réalisé à 2 dans le cadre d’un projet scolaire (ISI Montréal) 

- Date : Janvier 2017 
- Client : ISI 
- Catégorie : Web intégration


**But :** Réaliser un site sur le thème de notre choix 

**Contraintes :** Le site doit être réalisé en HTML5 et CSS3 et surtout en **PHP** + MySQL

**Choix du site :** « Quick Services » est un site fictif de services à la personnes, regroupant 3 services principaux (garde d'enfants, entretien et soutien scolaire)

**Graphisme :** Charte graphique, choix des couleurs 

**Page réalisées :**
**Page d’accueil :** 
- lien de connexion ou d'inscription dans le header
- utilisation d'une base de données pour répertorier toutes les personnes proposant leurs services (une personne peut proposer 1, 2 ou 3 services)
- lien vers les 3 principaux services soit par les icones, soit par le formulaire de recherche 
- affichage des 3 derniers candidats grâce à la base de données et requête MySQL
- un seul fichier HTML pour les pages "services", implémentation dynamique en PHP (gestion des query string)

**Page détail :** 
- toutes les informations de la personne sont affichées grâce à la base de données et requêtes MySQL
- affichage des icônes de services selon que la personne fait 1, 2 ou 3 services
- affichage des informations de contact grâce à la boite de dialog jQuery

**Formulaire de connexion :**
- validation des champs en PHP (affichage en rouge si champs mal ou non rempli)
- une fois connecté, les liens en haut de page ne sont plus "connexion" et "inscription" mais deviennent "mon compte" et "deconnexion" 
