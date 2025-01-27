# Evento

## Contexte du Projet

**Evento** est une plateforme novatrice dédiée à la gestion et à la réservation des places d'événements.  
Cette plateforme vise à offrir une expérience utilisateur optimale pour trois types d'utilisateurs : **participants**, **organisateurs**, et **administrateurs**.  

- **Participants** pourront découvrir, réserver, et générer des tickets pour une variété d'événements.  
- **Organisateurs** pourront créer et gérer leurs propres événements, tout en accédant à des statistiques.  
- **Administrateurs** superviseront les utilisateurs, les catégories, et la publication des événements.  

---

![Thumbnail 1](https://github.com/Zakaria-Kharroub/Eventopia/blob/ae14bef33a93bdc0b374cdfed24759f044018d3b/evento.webp)

---

## Fonctionnalités

### Utilisateur (Participant)

- Inscription à la plateforme en fournissant : nom, adresse e-mail, et mot de passe.
- Connexion au compte à l'aide des identifiants.
- Réinitialisation du mot de passe via un e-mail de réinitialisation.
- Navigation paginée des événements disponibles sur la plateforme.
- Filtrage des événements par catégorie.
- Recherche d'événements par titre.
- Consultation des détails d'un événement : description, date, lieu, et nombre de places disponibles.
- Réservation d'une place pour un événement.
- Génération d'un ticket après confirmation de la réservation.

### Organisateur

- Création d'événements : titre, description, date, lieu, catégorie, et nombre de places disponibles.
- Gestion des événements créés.
- Accès à des statistiques sur les réservations des événements.
- Configuration des réservations : acceptation automatique ou validation manuelle.

### Administrateur

- Gestion des utilisateurs : restriction des accès.
- Gestion des catégories : ajout, modification, suppression.
- Validation des événements avant leur publication.
- Accès à des statistiques globales.

---

## Bonus

- **Participants** :
  - Filtrer les événements par date ou lieu.
  - Connexion via Google ou Facebook.
  - Réception d'un e-mail contenant le ticket après confirmation de la réservation.
  - Génération de tickets au format PDF.
  
- **Développeurs** :
  - Intégration d'un système de paiement sécurisé pour les réservations.

---

## Technologies Utilisées

- **Backend** : Laravel (Framework PHP)
- **Frontend** : Blade (Moteur de Templates Laravel)
- **Base de données** : MySQL ou PostgreSQL
- **Autres** :
  - Authentification sécurisée avec Laravel Sanctum ou Passport.
  - Envoi d'e-mails avec Laravel Mail.
  - Génération de fichiers PDF (e.g., package domPDF ou Snappy).
  - Intégration de systèmes de paiement (e.g., Stripe ou PayPal API).

---
