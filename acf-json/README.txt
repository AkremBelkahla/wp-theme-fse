# Champs ACF pour MinimalFSE

Ce dossier contient les fichiers de configuration JSON pour les champs ACF utilisés dans le thème MinimalFSE.

## Installation

1. Installez et activez le plugin Advanced Custom Fields PRO.
2. Les champs seront automatiquement importés lors de l'activation du thème.

## Groupes de champs inclus

### Bloc Témoignage

- testimonial_text : Texte du témoignage (zone de texte)
- testimonial_name : Nom de l'auteur du témoignage (texte)
- testimonial_position : Poste/Entreprise de l'auteur (texte)
- testimonial_image : Photo de l'auteur (image)
- testimonial_rating : Note (nombre, 1-5)
- testimonial_style : Style du témoignage (sélecteur, options : style-1, style-2)

### Bloc Statistiques

- stats_title : Titre de la section (texte)
- stats_description : Description de la section (zone de texte)
- stats_layout : Disposition (sélecteur, options : grid, row)
- stats_columns : Nombre de colonnes (nombre, 1-4)
- stats_items : Éléments de statistiques (répéteur)
  - stats_number : Nombre (texte)
  - stats_suffix : Suffixe (texte, ex: +, %, K)
  - stats_label : Libellé (texte)
  - stats_icon : Icône (sélecteur)

### Bloc FAQ Accordéon

- faq_title : Titre de la section (texte)
- faq_description : Description de la section (zone de texte)
- faq_style : Style de l'accordéon (sélecteur, options : default, modern, minimal)
- faq_open_first : Ouvrir le premier élément par défaut (booléen)
- faq_items : Questions et réponses (répéteur)
  - faq_question : Question (texte)
  - faq_answer : Réponse (éditeur WYSIWYG)

## Utilisation

Pour utiliser ces blocs dans votre site, assurez-vous que le plugin Advanced Custom Fields PRO est activé, puis ajoutez les blocs via l'éditeur Gutenberg.
