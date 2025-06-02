**pronostics sportifs (foot, basket, tennis)**

---

## ⚙️ 1. **Stack technique légère et efficace**

* **Langage backend** : PHP (classique, sans framework)
* **Base de données** : MySQL
* **Frontend** : HTML5, CSS3 (avec Tailwind ou Bootstrap si tu veux aller vite), JavaScript vanilla (ou jQuery si besoin)
* **Structure MVC simplifiée** (pour pas que tout soit dans `index.php`)
* **Optionnel** : Adminer ou phpMyAdmin pour la gestion BDD

---

## 📁 2. **Structure de dossier propre dès le départ**

```
/pronos-site/
│
├── /public/               → Racine accessible depuis le web (index.php)
│   ├── /assets/           → Images, CSS, JS
│   │   ├── css/
│   │   ├── js/
│   │   └── img/
│   └── index.php          → Front controller
│
├── /app/                  → Code métier (logique de l’application)
│   ├── /controllers/      → Fichiers de traitement (AccueilController, MatchController…)
│   ├── /models/           → Accès à la BDD (Match.php, Sport.php…)
│   └── /views/            → HTML/PHP (matchs.php, accueil.php…)
│
├── /core/                 → Fonctions globales, config, DB
│   ├── config.php
│   ├── database.php
│   └── helpers.php
│
├── /admin/                → Espace admin pour ajouter/modifier des pronos
│   └── index.php
│
└── .htaccess              → Redirection propre des URLs
```

---

## 🧠 3. **Fonctionnalités principales (MVP)**

### 🎯 Côté utilisateur :

* Accueil avec les derniers pronos (foot, basket, tennis)
* Filtres par sport / date
* Résultats précédents
* Détail d’un match/prono
* Page “À propos” ou “Méthode”

### 🔐 Côté admin (simple login) :

* Ajouter un match avec :

  * Sport (foot, basket, tennis)
  * Équipes
  * Date/heure
  * Cote
  * Résultat (pour archive)
* Modifier/supprimer un prono

---

## 🧱 4. Base de données (structure simple)

```sql
Table: sports
- id (int, PK)
- nom (varchar) → foot, basket, tennis

Table: pronostics
- id (int, PK)
- sport_id (int, FK)
- equipe1 (varchar)
- equipe2 (varchar)
- date_match (datetime)
- pronostic (varchar) → “Victoire équipe 1”, “+2.5 buts”, etc.
- cote (float)
- resultat (nullable)

Table: admins
- id
- username
- password (hashé)
```

## 📁 `/app/views/` — **Vues utilisateur (frontend)**

| Nom du fichier     | Description                                  |
| ------------------ | -------------------------------------------- |
| `layout.php`       | Layout global (header, footer, `include`)    |
| `home.php`         | Page d’accueil avec les derniers pronos      |
| `matchs.php`       | Liste de tous les pronostics à venir         |
| `match-detail.php` | Détail d’un match/pronostic                  |
| `resultats.php`    | Résultats des matchs passés                  |
| `filtre-sport.php` | Vue filtrée par sport (foot, basket, tennis) |
| `a-propos.php`     | Présentation de la méthode ou du site        |
| `404.php`          | Page d’erreur personnalisée                  |

---

## 📁 `/admin/views/` — **Vues pour l’admin**

| Nom du fichier       | Description                                  |
| -------------------- | -------------------------------------------- |
| `login.php`          | Formulaire de connexion admin                |
| `dashboard.php`      | Tableau de bord (liste des pronos à gérer)   |
| `add-prono.php`      | Formulaire pour ajouter un pronostic         |
| `edit-prono.php`     | Modifier un prono existant                   |
| `delete-confirm.php` | Confirmation de suppression                  |
| `logout.php`         | Déconnexion (ou juste script de déconnexion) |

---

## 📁 Optionnel : Vues partagées / composants (`/app/views/partials/`)

| Nom du fichier | Description                                                     |
| -------------- | --------------------------------------------------------------- |
| `header.php`   | En-tête commun                                                  |
| `footer.php`   | Pied de page                                                    |
| `navbar.php`   | Menu de navigation                                              |
| `message.php`  | Zone d'affichage des alertes ou messages (erreur, succès, etc.) |

---