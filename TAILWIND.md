# Utilisation de Tailwind CSS dans MinimalFSE

Ce thème WordPress FSE utilise Tailwind CSS pour la mise en page et le style. Ce document explique comment travailler avec Tailwind CSS dans ce thème.

## Prérequis

- Node.js (v14+)
- npm ou yarn

## Installation

1. Clonez ou téléchargez le thème dans votre répertoire WordPress `/wp-content/themes/`
2. Naviguez vers le répertoire du thème et installez les dépendances :

```bash
cd /path/to/wp-content/themes/minimalfse
npm install
# ou
yarn install
```

## Compilation des assets

Le thème utilise Laravel Mix pour compiler les assets. Voici les commandes disponibles :

### Développement

Pour compiler les assets en mode développement :

```bash
npm run dev
# ou
yarn dev
```

### Surveillance des fichiers

Pour surveiller les fichiers et recompiler automatiquement lors des modifications :

```bash
npm run watch
# ou
yarn watch
```

### Production

Pour compiler les assets en mode production (minifiés et optimisés) :

```bash
npm run prod
# ou
yarn prod
```

## Structure des fichiers Tailwind CSS

- `src/css/app.css` - Fichier CSS principal avec les imports Tailwind et les styles personnalisés
- `tailwind.config.js` - Configuration Tailwind CSS
- `postcss.config.js` - Configuration PostCSS
- `webpack.mix.js` - Configuration Laravel Mix

## Utilisation de Tailwind CSS dans les templates

Les templates HTML utilisent les classes Tailwind directement. Par exemple :

```html
<div class="container mx-auto px-4 py-8">
  <h1 class="text-3xl font-bold text-gray-900 mb-4">Titre</h1>
  <p class="text-lg text-gray-600">Contenu</p>
</div>
```

## Personnalisation de Tailwind CSS

### Couleurs

Les couleurs sont définies dans `tailwind.config.js` :

```js
colors: {
  primary: '#0056b3',
  secondary: '#6c757d',
  accent: '#17a2b8',
  dark: '#212529',
  light: '#f8f9fa',
  // etc.
}
```

### Espacement

Les espacements personnalisés sont définis dans `tailwind.config.js` :

```js
spacing: {
  'xxs': '0.25rem',
  'xs': '0.5rem',
  's': '1rem',
  'm': '1.5rem',
  'l': '2rem',
  'xl': '3rem',
  'xxl': '5rem',
}
```

### Typographie

Les polices sont définies dans `tailwind.config.js` :

```js
fontFamily: {
  sans: ['-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', 'Roboto', '"Helvetica Neue"', 'Arial', 'sans-serif'],
  serif: ['Merriweather', 'Georgia', 'serif'],
  poppins: ['Poppins', 'sans-serif'],
}
```

## Composants personnalisés

Des composants personnalisés sont définis dans `src/css/app.css` à l'aide de `@layer components`. Par exemple :

```css
@layer components {
  .btn {
    @apply inline-block py-3 px-6 rounded font-medium transition-all duration-300;
  }

  .btn-primary {
    @apply bg-primary text-white hover:bg-accent hover:no-underline;
  }
}
```

## Intégration avec Gutenberg

Les classes Tailwind sont utilisées directement dans les blocs Gutenberg via l'attribut `className`. Par exemple :

```php
<!-- wp:heading {"className":"text-3xl font-bold text-gray-900 mb-4"} -->
<h2 class="text-3xl font-bold text-gray-900 mb-4">Titre</h2>
<!-- /wp:heading -->
```

## Intégration avec ACF Blocks

Les blocs ACF utilisent également les classes Tailwind directement dans les templates PHP. Par exemple :

```php
<div class="max-w-4xl mx-auto py-12 px-4">
  <h2 class="text-3xl font-bold text-gray-900 mb-4"><?php echo esc_html($title); ?></h2>
  <div class="prose text-gray-600"><?php echo $content; ?></div>
</div>
```

## Ressources utiles

- [Documentation Tailwind CSS](https://tailwindcss.com/docs)
- [Laravel Mix](https://laravel-mix.com/docs/6.0/what-is-mix)
- [Tailwind CSS Cheat Sheet](https://nerdcave.com/tailwind-cheat-sheet)
- [Tailwind CSS IntelliSense](https://marketplace.visualstudio.com/items?itemName=bradlc.vscode-tailwindcss) (extension VS Code)
