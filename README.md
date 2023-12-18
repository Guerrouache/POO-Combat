# TP Combat POO

## Résumé des compétences visées

- Vous allez utiliser les connaissances acquises sur PDO pour gérer une base de données de héros de jeu.
- Vous allez créer des classes PHP qui ont des rôles bien déterminés et séparés.
- Vous allez en apprendre un peu plus sur l’intérêt des classes.
- Vous allez découvrir le principe de l’auto loading.
- Vous allez découvrir le principe de l’hydratation et l’imbrication de la PDO avec les classes.
- Vous allez utiliser les principes fondamentaux de la POO : l’encapsulation, l’héritage, le polymorphisme.

## Instructions générales

Nous allons découper ce TP en 2 sprints, Une correction sera faite entre les 2.

Pour réaliser ce TP, vous <ins>pouvez</ins> travailler par équipe de deux.

Vous devrez soigner l'apparence de l'application ainsi que l'arborescence du projet.

Vous devrez élaborer une base de données en lien avec les différentes fonctionnalités.

**Au fur et à mesure de la progression, de nouvelles itérations du projet s'ajouteront, vous devez préparer votre code à la maintenabilité et la scalabilité (mise à l'échelle) en découpant vos fonctionnalités le plus possible dans vos objets.**

Un pas à pas est disponible pour vous aider à démarrer le projet. Ce qui vous donnera ensuite les bases pour le deuxième sprint.


## 🏆 Objectifs sprint 1

L'objectif de ce TP est de créer un jeu de combat en tour par tour entre des héros que l'on crée et des monstres automatiquement générés. Voici le déroulé attendu :

1. **Création d'un Héros :** 🦸
   - Chaque visiteur peut créer un héros en saisissant uniquement un nom, ce qui a pour effet de créer un héros en base de données.

   <img src="./assets/AccueilCreateHero.png" alt="accueil-create-hero"/>

2. **Choix du Héros :** 🤔
   - L'utilisateur peut également choisir l'un des héros déjà créés avec lequel se battre, à condition que le héros soit toujours en vie (HP > 0).

   <img src="./assets/HeroChoice.png" alt="hero-choice"/>

3. **Lancement d'un Combat :** ⚔️ 
   - L'utilisateur peut lancer un nouveau combat en cliquant sur le bouton "Choisir un Héros".

4. **Automatisation du Combat :** 🤖
   - Après que le combat a été lancé, un monstre est automatiquement créé. Le déroulé du combat est enregistré dans un tableau PHP utilisé pour afficher les échanges de dégâts entre le monstre et le héros.

   <img src="./assets/Fight.png" alt="hero-choice"/>

5. **Résultat du Combat :** 🏆
   - L'utilisateur voit son héros survivre ou mourir au combat.
   - Lorsqu'un joueur ou le monstre n'a plus de points de vie, le combat est terminé.

6. **Rejouer :** 🔁
   - Donner la possibilité de rejouer. Si le héros survit, il devient sélectionnable à nouveau dans l'accueil.

