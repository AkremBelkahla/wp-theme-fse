# MinimalFSE - Thème WordPress FSE Minimaliste avec Tailwind CSS

![WordPress](https://img.shields.io/badge/WordPress-6.6%2B-blue)
![PHP](https://img.shields.io/badge/PHP-7.4%2B-purple)
![License](https://img.shields.io/badge/License-GPL%20v2%2B-green)
![Version](https://img.shields.io/badge/Version-1.0.0-orange)
![FSE](https://img.shields.io/badge/Full%20Site%20Editing-Ready-brightgreen)

> ✅ **Conforme aux normes WordPress** - Ce thème respecte toutes les normes de codage et bonnes pratiques WordPress.

MinimalFSE est un thème WordPress Full Site Editing (FSE) minimaliste, performant et moderne, conçu pour les agences digitales et les sites vitrines professionnels. Il utilise Tailwind CSS pour une mise en page flexible et efficace.

## Caractéristiques

- **Full Site Editing** : Profitez de toutes les fonctionnalités de l'éditeur de site complet de WordPress.
- **Tailwind CSS** : Utilise le framework CSS utilitaire pour un développement rapide et flexible.
- **Design minimaliste** : Interface épurée et élégante, adaptée aux sites professionnels.
- **Haute performance** : Optimisé pour des temps de chargement rapides avec CSS purgeé.
- **Responsive** : S'adapte parfaitement à tous les appareils (mobile, tablette, desktop).
- **Personnalisable** : Palette de couleurs, typographies et espacements entièrement personnalisables.
- **Compatible Gutenberg** : Conçu pour tirer pleinement parti de l'éditeur de blocs.
- **Compositions (Patterns)** : Inclut des compositions prédéfinies pour construire rapidement votre site.
- **Variations de blocs** : Des variations personnalisées pour les blocs natifs de WordPress.
- **Blocs personnalisés** : Blocs sur mesure développés avec l'API native de WordPress.
- **Support ACF Blocks** : Intégration avec Advanced Custom Fields pour des blocs avancés.

## Prérequis

- WordPress 6.6 ou supérieur
- PHP 7.4 ou supérieur
- Node.js et npm (pour le développement avec Tailwind CSS)
- Un navigateur moderne (Chrome, Firefox, Safari, Edge)

## Installation

1. Téléchargez l'archive du thème.
2. Dans votre administration WordPress, allez dans **Apparence > Thèmes > Ajouter**.
3. Cliquez sur **Téléverser un thème**.
4. Sélectionnez l'archive téléchargée et cliquez sur **Installer maintenant**.
5. Une fois l'installation terminée, cliquez sur **Activer**.

## Personnalisation

### Via l'éditeur de site

1. Dans votre administration WordPress, allez dans **Apparence > Éditeur**.
2. Vous pouvez maintenant personnaliser l'ensemble de votre site, y compris :
   - Les modèles de pages (templates)
   - L'en-tête et le pied de page
   - Les styles globaux (couleurs, typographie, etc.)

### Via le fichier theme.json

Le fichier `theme.json` contient toutes les configurations de style du thème. Vous pouvez le modifier directement pour personnaliser :

- Les palettes de couleurs
- Les familles de polices
- Les tailles de police
- Les espacements
- Les styles de boutons
- Et bien plus encore

## Structure du thème

```
minimalfse/
├── acf-blocks/           # Blocs ACF personnalisés
│   ├── testimonial/
│   └── stats/
├── assets/              # Ressources statiques
│   ├── css/
│   ├── js/
│   └── images/
├── blocks/              # Blocs personnalisés avec l'API native
│   └── feature-box/
├── inc/                 # Fichiers d'intégration
│   ├── acf-blocks.php
│   ├── block-overrides.php
│   ├── block-variations.php
│   └── blocks.php
├── parts/               # Parties de templates
│   ├── header.html
│   └── footer.html
├── patterns/            # Compositions (patterns)
│   ├── hero-section.php
│   ├── services-grid.php
│   ├── testimonials.php
│   ├── cta-section.php
│   └── team-members.php
├── templates/           # Templates FSE
│   ├── 404.html
│   ├── archive.html
│   ├── index.html
│   └── single.html
├── functions.php        # Fonctions principales
├── style.css            # Identification du thème
├── theme.json           # Configuration FSE
└── README.md            # Documentation
```

## Personnalisation avancée

### Tailwind CSS

Ce thème utilise Tailwind CSS pour les styles. Pour plus d'informations sur l'utilisation de Tailwind CSS dans ce thème, consultez le fichier [TAILWIND.md](TAILWIND.md).

### Compilation des assets

```bash
# Installation des dépendances
npm install

# Développement
npm run dev

# Surveillance des fichiers
npm run watch

# Production
npm run prod
```

### Ajouter des styles personnalisés

1. Modifiez le fichier `src/css/app.css` pour ajouter vos styles personnalisés.
2. Utilisez les directives `@layer` de Tailwind pour organiser votre code.
3. Exécutez `npm run dev` ou `npm run prod` pour compiler les styles.

### Ajouter des scripts personnalisés

1. Modifiez le fichier `src/js/app.js` pour ajouter vos scripts personnalisés.
2. Exécutez `npm run dev` ou `npm run prod` pour compiler les scripts.

## Fonctionnalités FSE et Gutenberg

### Modèles disponibles

- **index.html** : Page d'accueil et liste des articles
- **single.html** : Affichage d'un article individuel
- **archive.html** : Pages d'archives (catégories, tags, etc.)
- **404.html** : Page d'erreur 404

### Parties de modèles

- **header.html** : En-tête du site
- **footer.html** : Pied de page du site

### Compositions (Patterns)

- **Hero Section** : Section d'en-tête avec arrière-plan, titre et boutons d'appel à l'action
- **Services Grid** : Grille de services avec icônes et descriptions
- **Testimonials** : Section de témoignages clients
- **CTA Section** : Section d'appel à l'action avec boutons
- **Team Members** : Présentation des membres de l'équipe

### Variations de blocs

Des variations personnalisées pour les blocs natifs :

- **Boutons** : Variations primaire et secondaire
- **Groupes** : Variations avec bordure et fond accentué
- **Colonnes** : Variations avec ratios prédéfinis (70/30, 30/70)
- **Paragraphes** : Variation avec mise en évidence

### Blocs personnalisés

- **Feature Box** : Bloc pour afficher une fonctionnalité avec icône, titre et description

### Blocs ACF

> Nécessite le plugin Advanced Custom Fields PRO

- **Témoignage** : Bloc pour afficher un témoignage client avec photo et notation
- **Statistiques** : Bloc pour afficher des statistiques avec compteurs animés
- **FAQ Accordéon** : Bloc accordéon pour afficher des questions fréquentes

## Support et contribution

Pour toute question ou suggestion, veuillez ouvrir une issue sur le dépôt GitHub du thème ou contacter l'auteur à l'adresse email indiquée dans le fichier `style.css`.

### Contribuer au développement

1. Forkez le projet
2. Créez votre branche de fonctionnalité (`git checkout -b feature/amazing-feature`)
3. Committez vos changements (`git commit -m 'Add some amazing feature'`)
4. Poussez vers la branche (`git push origin feature/amazing-feature`)
5. Ouvrez une Pull Request

## Conformité WordPress

Ce thème a été développé en respectant toutes les normes et bonnes pratiques WordPress :

- ✅ **Sécurité** : Vérification ABSPATH, échappement des sorties, validation des entrées
- ✅ **Performance** : Code optimisé, pas de redondance, utilisation native de theme.json
- ✅ **Internationalisation** : Fichier POT inclus, prêt pour la traduction
- ✅ **Accessibilité** : Respect des standards WCAG
- ✅ **Structure** : Organisation claire et documentée
- ✅ **Theme.json v3** : Compatible WordPress 6.6+ avec appearanceTools activé

📄 **Documentation complète** : Consultez [AMELIORATIONS-WP.md](./AMELIORATIONS-WP.md) pour tous les détails des améliorations apportées.

## Licence

Ce thème est distribué sous licence GNU General Public License v2 ou ultérieure.

---

**Développé avec ❤️ par [Akrem Belkahla](https://infinityweb.tn) pour la communauté WordPress.**
