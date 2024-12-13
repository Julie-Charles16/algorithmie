# L'algorithmie à travers PHP

L'objectif est de créer une application web permettant de collecter des informations et de les stocker en session.

<div align="center">
    <img src="./php/images/algorithm.svg" alt="algorithm.svg" style="width: 500px !important;">
</div>

## Contexte du projet

Je suis un formateur dans le numérique et je vais aborder des notions fondamentales sur le développement.

J'ai besoin d'une application qui me permettra de faire une démo en directe.  
L'application fonctionnera à l'aide de sessions PHP pour stocker temporairement les informations. Il sera possible de visualiser, modifier ou supprimer les données enregistrées.

Je vous ai fourni un jeux de maquettes avec des explications pour atteindre le résultat souhaité.

A vous de jouer 😃!

## Modalités pédagogiques

**Activité individuelle en mode collaboratif.**

### Contraintes

- L'application doit être identique aux maquettes.
- Version de Bootstrap 5.1.3.

### Etape 1 : Collecte des données

- Implémentez un formulaire permettant de récupérer les informations suivantes : prénom, nom, âge, taille et civilité.
- Sauvegardez les données dans une session PHP et assurez-vous qu'elles soient disponibles sur d'autres pages de l'application.

### Etape 2 : Affichage et manipulation des données

Affichez les données sauvegardées sous différentes formes :
- Un mode **débogage** qui utilise `print_r()` pour afficher la structure des données.
- Un mode **concaténation** pour construire des phrases complètes avec les informations fournies.
- Une **boucle** pour parcourir les données de manière dynamique.
- Utilisation d'une **fonction** personnalisée pour afficher les données collectées.

### Etape 3 : Gestion de plusieurs formulaires

- Ajoutez un second formulaire qui permet de collecter des informations supplémentaires comme des compétences techniques et la date de naissance.
- Implémentez la gestion du téléchargement de fichiers : ajoutez un champ pour permettre à l'utilisateur d'uploader une image.

### Bonus

- Sauvegardez les données dans un cookie.
- Injectez les données dans les formulaires en cas de modification.

### Deadline

Livraison du projet dans 5 jours à compter du début du brief.

## Modalités d'évaluation

- Le projet sera évalué via une démonstration de l'application, en passant par les différentes étapes de gestion des données.
- La gestion des erreurs (comme la vérification des extensions de fichier pour l'upload) doit être correcte et afficher des messages d'alerte appropriés.

## Livrables

- Un dépôt github.

# Critères de performance

- Ajoutez la grille d'évaluation ci-dessous dans le README de la personne que vous corrigez.
- Pensez à compléter le ***nom de la personne corrigée*** et le ***nom du correcteur*** dans l'entête du tableau.
- Indiquez le **nombre d'étoiles obtenues** (l'étoile d'une *catégorie* est obtenue si tous ses critères de performance sont validés).

| *Julie*            |                                | *Aledorian*    |
| :---- | :----: | :---: |
| Critères de performance                  |                                | Remarques du correcteur |
| ***Interface utilisateur***              |                                |                         |
| - Fidèle aux maquettes fournies          | <ul><li>- [x] &nbsp;</li></ul> |                         |
| - Formulaires bien structurés            | <ul><li>- [x] &nbsp;</li></ul> |                         |
|                                          | <ul><li>- [x] ⭐</li></ul>     |                         |
| ***Fonctionnalités***                    |                                |                         |
| - Données sauvegardées en session        | <ul><li>- [x] &nbsp;</li></ul> |                         |
| - Le formulaire 1 est fonctionnel        | <ul><li>- [x] &nbsp;</li></ul> |                         |
| - Le formulaire 2 est fonctionnel        | <ul><li>- [x] &nbsp;</li></ul> |                         |
| - Le mode débogage fonctionne            | <ul><li>- [x] &nbsp;</li></ul> |                         |
| - La concaténation est correcte          | <ul><li>- [x] &nbsp;</li></ul> |                         |
| - La boucle est dynamique                | <ul><li>- [x] &nbsp;</li></ul> |                         |
| - L'upload est fonctionnel et sécurisé   | <ul><li>- [x] &nbsp;</li></ul> |                         |
|                                          | <ul><li>- [x] ⭐</li></ul>     |                         |
| ***Code***                               |                                |                         |
| - Organisation et lisibilité du code     | <ul><li>- [x] &nbsp;</li></ul> |                         |
| - Respect des bonnes pratiques PHP       | <ul><li>- [x] &nbsp;</li></ul> |                         |
| - Commentaires dans le code              | <ul><li>- [x] &nbsp;</li></ul> |                         |
|                                          | <ul><li>- [x] ⭐</li></ul>     |                         |
| ***Bonus***                              |                                |                         |
| - Données dans un cookie                 | <ul><li>- [ ] &nbsp;</li></ul> |                         |
| - Données injectées dans les formulaires | <ul><li>- [ ] &nbsp;</li></ul> |                         |
|                                          | <ul><li>- [ ] ⭐</li></ul>     |                         |
| ***Livrables***                          |                                |                         |
| - Projet livré dans les délais           | <ul><li>- [x] &nbsp;</li></ul> |                         |
|                                          | <ul><li>- [x] ⭐</li></ul>     |                         |

**Nombre d'étoiles obtenues** : ⭐⭐⭐⭐


## Ressources

- [Bootstrap](https://getbootstrap.com/docs/5.1/forms/overview)
- [Bootswatch](https://bootswatch.com)
- [Structure conditionnelle](https://www.php.net/manual/en/control-structures.elseif.php)
- [Superglobale $_GET](https://www.php.net/manual/en/reserved.variables.get.php)
- [Superglobale $_POST](https://www.php.net/manual/en/reserved.variables.post.php)
- [Superglobale $_FILES](https://www.php.net/manual/en/reserved.variables.files.php)

## Auteurs, contributeurs

- [Nicolas Herbez](https://github.com/nicolas-herbez)
