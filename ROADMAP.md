# 📋 Feuille de Route & Liste des Corrections — GaSo&Co

## 📌 Vue d'ensemble
Ce document recense l'ensemble des corrections techniques, optimisations de performance, conformités légales et améliorations d'expérience utilisateur (UI/UX) à intégrer dans le projet **GaSo&Co**.

---

## 🚨 Phase 1 : Correctifs Urgents (Bloquants, Performance & Légal)

- [ ] **1. Optimisation drastique des images (Performance Core Web Vitals)**
  - Redimensionner et compresser l'ensemble des images brutes HD (~75 Mo au total) au format **WebP** ou **JPG optimisé** (poids cible : < 300 Ko par image).
  - *Fichiers volumineux dans `assets/img/`* :
    - `tondeuse.png` (26,5 Mo ➔ cible WebP ~200 Ko)
    - `taille-haie-zoom.png` (22,7 Mo ➔ cible WebP ~250 Ko)
    - `taille-haie.jpg` (11,5 Mo ➔ cible WebP ~180 Ko)
    - `souffleur-feuilles.jpg` (10,2 Mo ➔ cible WebP ~200 Ko)
    - `background-snipper.jpg` (7,9 Mo ➔ cible WebP ~300 Ko)
    - `fendeuse.jpg` (3,7 Mo) & `remorque.jpg` (3,3 Mo)
  - Ajouter l'attribut `loading="lazy"` et `decoding="async"` sur toutes les images situées sous la ligne de flottaison.

- [ ] **2. Correction de la version Bootstrap CDN (Stabilité JS/CSS)**
  - Remplacer la version CDN inexistante `bootstrap@5.3.8` par la version stable `bootstrap@5.3.3` dans l'entête `<head>` et les scripts de bas de page.
  - *Fichiers concernés* : [index.html](file:///c:/Dev/gasoEtco/index.html), [locations.html](file:///c:/Dev/gasoEtco/locations.html), [bricolage.html](file:///c:/Dev/gasoEtco/bricolage.html), [espaces-verts.html](file:///c:/Dev/gasoEtco/espaces-verts.html), [devis.html](file:///c:/Dev/gasoEtco/devis.html), [tarifs.html](file:///c:/Dev/gasoEtco/tarifs.html), [contact.html](file:///c:/Dev/gasoEtco/contact.html).

- [ ] **3. Création des pages légales obligatoires (Résolution des 404)**
  - Créer `mentions-legales.html` (Éditeur, SIRET 990 761 439 00027, Hébergeur GitHub Pages, Directeur publication).
  - Créer `politique-confidentialite.html` (Traitement des données personnelles RGPD pour devis/contact).
  - Créer `cgv.html` (Conditions Générales de Vente et de Location).

- [ ] **4. Finalisation de la page Contact (`contact.html`)**
  - Remplacer le contenu vide (`🚧 Site en cours de construction`) dans [contact.html](file:///c:/Dev/gasoEtco/contact.html#L72-L74).
  - Intégrer un vrai formulaire de contact, les coordonnées directes (*Téléphone* `07.66.81.65.11`, *Email* `gaso.co64@gmail.com`, *Adresse* 2001 chemin de cassou, 64270 Puyoo), les horaires d'ouverture et une carte interactive OpenStreetMap ou Google Maps.

---

## 📱 Phase 2 : Ergonomie, Layout & Responsive (UI/UX)

- [ ] **5. Implémentation d'un vrai menu Burger Mobile**
  - Adapter la navigation dans [_header.scss](file:///c:/Dev/gasoEtco/assets/scss/_header.scss) pour masquer la liste sur petit écran et ajouter un menu déroulant toggle (`navbar-toggler`) afin d'économiser la hauteur d'affichage sur smartphone.

- [ ] **6. Nettoyage de la bannière "Site en construction"**
  - Retirer ou convertir le bandeau `🚧 Site en cours de construction` sur l'ensemble des pages une fois le site finalisé.

- [ ] **7. Correction des liens réseaux sociaux du footer**
  - Remplacer les ancres factices `href="#"` des icônes Instagram et Facebook par les URLs officielles des profils de l'entreprise.

---

## ⚡ Phase 3 : Interactivité & Nouvelles Fonctionnalités

- [ ] **8. Formulaire de devis interactif et fonctionnel**
  - Relier le formulaire [devis.html](file:///c:/Dev/gasoEtco/devis.html#L109) à une solution d'envoi d'e-mail (Formspree, Web3Forms ou Formsubmit).
  - Ajouter la validation client en JavaScript et un message de confirmation dynamique sans rechargement de page.

- [ ] **9. Système de filtre et recherche sur la page Location**
  - Sur [locations.html](file:///c:/Dev/gasoEtco/locations.html), ajouter des filtres par catégorie (*Tous*, *Espaces Verts*, *BTP / Outillage*, *Pneumatique*) et une barre de recherche rapide par mot-clé.

- [ ] **10. Slider comparatif Avant / Après interactif**
  - Sur [espaces-verts.html](file:///c:/Dev/gasoEtco/espaces-verts.html#L131-L200), remplacer l'affichage statique des réalisations par un composant d'image comparatif Avant/Après avec curseur glissant.

- [ ] **11. Simulateur / Calculateur de tarif de location**
  - Proposer un outil dynamique sur [tarifs.html](file:///c:/Dev/gasoEtco/tarifs.html) permettant aux clients d'estimer instantanément leur coût de location selon la durée sélectionnée.

---

## 🎯 Phase 4 : SEO & Référencement Local (Puyoo, 64)

- [ ] **12. Balises Meta Title & Description uniques**
  - Définir un titre et une meta description distincts par page, optimisés avec les mots-clés régionaux (*Puyoo*, *Orthez*, *Salies-de-Béarn*, *64*).

- [ ] **13. Données structurées Schema.org (JSON-LD)**
  - Insérer le balisage JSON-LD `LocalBusiness` / `EquipmentRental` dans le `<head>` pour améliorer l'affichage dans Google Search & Google Maps (Rich Snippets).

- [ ] **14. Génération du `sitemap.xml` et `robots.txt`**
  - Ajouter ces deux fichiers à la racine du projet pour faciliter le crawl des moteurs de recherche.
