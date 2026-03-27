# API Projet JS — Guide de démarrage

## Prérequis

- [PHP 8.2+](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/download/)
- [Node.js & npm](https://nodejs.org/)

## Installation

### 1. Cloner le projet

```bash
git clone <url-du-repo>
cd api-projet-js
```

### 2. Installer les dépendances PHP

```bash
composer install
```

### 3. Installer les dépendances Node.js

```bash
npm install
```

### 4. Configurer l'environnement

```bash
copy .env.example .env
```

Puis générer la clé d'application :

```bash
php artisan key:generate
```

### 5. Configurer la base de données

Le projet utilise SQLite par défaut. Créer le fichier de base de données :

```bash
type nul > database\database.sqlite
```

Lancer les migrations :

```bash
php artisan migrate
```

## Démarrage

### Compiler les assets (Vite)

Dans un premier terminal :

```bash
npm run dev
```

### Lancer le serveur Laravel sur le port 8011

Dans un second terminal :

```bash
php artisan serve --port=8011
```

L'API est accessible sur : `http://localhost:8011`