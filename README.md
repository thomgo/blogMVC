# Blog PHP procédural avec modèle MVC simple

Il s'agit d'un exercice PHP développé dans le cadre de mon poste de formateur en développement web. L'objectif est que les apprenants pratiquent le PHP procédural et se familiarisent ainsi avec ses fonctionnalités de base en développement un système simple d'ajout de contenu pour un blog.

Plus tard, ils réorganisent le code pour implanter un pattern MVC simplifié.

Au travers de cet exercice, ils apprennent à :
- Inclure des fichiers
- Manipuler des variables
- Afficher des informations dans le HTML
- Organiser l'affiche d'un site au sein d'un template
- Protéger des pages avec un mot de passe
- Gérer des utilisateurs
- Créer et utiliser une base de données
- Réaliser les opérations du CRUD
- Manipuler des données de formulaires
- Manipuler des fichiers
- Transmettre des données via l'url
- Créer une architecture MVC

## Consignes

Vous réaliserez un blog qui permet la publication d'articles avec une image.

Spécifications fonctionnelles :

- Quand l'utilisateur arrive sur la page d'accueil il voit tous les articles du blog sous forme de cartes
- Quand l’utilisateur clique sur une carte il arrive sur une page avec une vue détaillée de l’article.
- Un article est composé à minima d'un titre, d'une phrase d'accroche, d'un contenu texte et d'une image d'illustration
- L’utilisateur peut accéder à un espace d’administration où il peut ajouter via un formulaire un article et l’image associée en base de données.
- L'espace d'administration est protégé, seul l'utilisateur connecté peut y accéder
- Si un utilisateur non connecté essaie d'accéder à l'espace d'administration, il est redirigé vers une page de login

Les spécifications techniques sont les suivantes :
- Utilisation du SGBD MySQL
- Les articles sont récupérés depuis une base de données
- Le mot de passe de l'utilisateur est haché en base de données à l'aide de password_hach
- Les informations générales du site (titre, sous-titre, auteur, date de création et licence) sont affichées depuis une table en base de données
- Le mot de passe est vérifié à la connexion à l'aide de password_verify
- Il n'y a pas de formulaire d'ajout utilisateur. Un seul utilisateur est stocké en base de données manuellement.
- Des messages d'erreur sont affichés à l'utilisateur quand la soumission des formulaires échoue
- Le site est protégé contre les injections SQL et les insertions de code

## Pour aller plus loin

- Organisez votre code selon le pattern MVC
- Mettez en place des vérifications poussées sur le formulaire d'ajout d'articles (nombre de caractères, présence d'insultes, taille de l'image, extension de l'image...)
- Permettez la modification des informations générales du site via l'espace d'administration
