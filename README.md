<div align="center">

<img src="assets/images/favicon.svg" alt="Faydev logo" height="64" />

# Faydev — Personal Business Card Website

**Software & Web Developer untuk UMKM**

[![PHP](https://img.shields.io/badge/PHP-7.4%2B-777bb4?style=flat-square&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-5.7%2B-4479a1?style=flat-square&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)](LICENSE)

[Overview](#overview) · [Features](#features) · [Project structure](#project-structure) · [Getting started](#getting-started) · [API reference](#api-reference) · [Customization](#customization)

</div>

---

A lightweight, single-page portfolio and personal branding site for **Faris AY (Faydev)**, a freelance Software Engineer and Fullstack Developer focused on helping Indonesian SMBs (UMKM) grow through web technology.

The site is built with plain PHP + MySQL for the backend (projects gallery and social links APIs) and vanilla HTML/CSS/JavaScript for the frontend — designed for simple shared hosting with no build tools required.

## Overview

The website serves as a digital business card and a primary landing destination from social media channels. It showcases skills, offered services, and a dynamically populated project gallery, funnelling interested visitors toward a WhatsApp consultation CTA.

Key design choices:

- **No framework dependency** — plain PHP, CSS custom properties, and vanilla JS keep the codebase portable and hosting-agnostic.
- **Mobile-first** — layout and performance are optimised for mobile visitors first.
- **Database-driven where it matters** — the projects gallery and social links are stored in MySQL so they can be updated without touching HTML.

## Features

- **Hero section** with typing animation, profile photo, and prominent CTAs
- **About / Skills / Services** sections — hardcoded in HTML for fast rendering
- **Dynamic project gallery** — latest projects fetched from the database via a PHP JSON API, with skeleton loaders and fallback placeholder images
- **Social links** — injected from database, with static fallbacks if the API is unavailable
- **Dark / Light theme toggle** — preference persisted in `localStorage`
- **WhatsApp integration** — pre-filled CTA links for instant consultation
- **Scroll animations** and back-to-top button
- **SEO ready** — `<title>`, meta description, Open Graph and Twitter Card tags

## Project structure

```
faydev.my.id/
├── index.php           # Single-page entry point (HTML + PHP date)
├── database.sql        # MySQL schema and seed data
├── includes/
│   └── db.php          # PDO connection helper (DB_HOST, DB_USER, DB_PASS, DB_NAME)
├── api/
│   ├── projects.php    # GET /api/projects.php?limit={n}  → JSON
│   └── social.php      # GET /api/social.php              → JSON
└── assets/
    ├── css/style.css   # All styles (CSS custom properties, dark/light themes)
    ├── js/main.js      # Theme toggle, typing animation, API fetching, animations
    └── images/         # favicon.svg, profile.jpg, og-image.jpg, project thumbnails
```

## Getting started

**Requirements:** PHP ≥ 7.4, MySQL ≥ 5.7, Apache (or the PHP built-in server), `pdo_mysql` extension enabled.

### 1. Set up the database

Import the provided schema and seed data:

```bash
# Using the MySQL CLI
mysql -u root -p < database.sql
```

Or import `database.sql` via phpMyAdmin: **Import → choose file → Go**.

The script creates the `fayd7716_project` database automatically.

### 2. Configure the database connection

Edit `includes/db.php` and update the constants to match your environment:

```php
define('DB_HOST', 'localhost');
define('DB_USER', 'your_db_user');
define('DB_PASS', 'your_db_password');
define('DB_NAME', 'fayd7716_project');
```

> [!WARNING]
> Credentials are currently hardcoded in `includes/db.php`. Do not commit production credentials to version control. Consider loading them from environment variables or a server-level config file before deploying to a public host.

### 3. Start the server

**XAMPP / Apache** — place the project inside your webroot and visit:

```
http://localhost/faydev.my.id/
```

**PHP built-in server** (development only):

```bash
php -S localhost:8000
# open http://localhost:8000/
```

### 4. Verify

- The page loads with a project gallery (six cards from the seed data).
- Switching the theme toggle persists across page reloads.
- Social icons in the contact section match the links seeded in `social_links`.

## Deployment

This project is designed for **shared hosting / cPanel**:

1. Upload all files to `public_html` (or a subdirectory).
2. Import `database.sql` via the hosting panel's phpMyAdmin.
3. Update `includes/db.php` with the remote database credentials.
4. Verify PHP's `pdo_mysql` extension is enabled (it is on virtually all cPanel hosts by default).

No build step, no Composer dependencies, no Node.js required.

## API reference

### `GET /api/projects.php`

Returns the latest projects ordered by date descending.

| Parameter | Type    | Default | Range |
|-----------|---------|---------|-------|
| `limit`   | integer | `6`     | 1–20  |

**Example response:**

```json
{
  "success": true,
  "data": [
    {
      "id": 1,
      "title": "Website Company Profile UMKM Kuliner",
      "thumbnail": "assets/images/projects/project-1.jpg",
      "demo_link": "https://demo.faydev.my.id/umkm-kuliner",
      "project_date": "2026-02-25"
    }
  ]
}
```

### `GET /api/social.php`

Returns all social media links ordered by insertion order.

**Example response:**

```json
{
  "success": true,
  "data": [
    { "id": 1, "name": "Instagram", "icon": "fab fa-instagram", "url": "https://instagram.com/faydev" }
  ]
}
```

Both endpoints return `{ "success": false, "message": "Database error" }` with HTTP 500 on failure.

## Customization

| What to change | Where |
|---|---|
| Personal info, hero text, skills, services | `index.php` (hardcoded HTML) |
| WhatsApp number | All `wa.me/` links in `index.php` |
| Database credentials | `includes/db.php` |
| Project gallery entries | `projects` table in MySQL |
| Social media links | `social_links` table in MySQL |
| Colours and typography | CSS custom properties at the top of `assets/css/style.css` |
| Profile photo | Replace `assets/images/profile.jpg` |
| OG / social share image | Replace `assets/images/og-image.jpg` |

> [!TIP]
> Social links and project thumbnails can be updated at any time through a MySQL client (phpMyAdmin, TablePlus, etc.) without touching source code. An admin panel for managing these is planned for a future iteration.

## Future development

Planned additions per the product spec:

- Admin panel (PHP + session login) for managing projects and social links without direct DB access
- Project detail pages at `/project/{slug}`
- `.env`-based configuration to avoid hardcoded credentials
