# digital-file-store (scaffold)

This repository is a scaffold for a **Digital Files Store** using **Laravel-style backend** and **Next.js frontend**.
Files are stored on Google Drive and products reference Drive share links.

Included:
- backend/ (Laravel-like structure, migrations, controllers)
- frontend/ (Next.js app, pages, admin UI)
- docker-compose.yml (MySQL, Redis, backend, frontend, proxy)
- deploy.sh (install Docker & run)

**Important**: This scaffold is a starting point. You must run Composer/NPM to install dependencies inside containers or locally.

Steps to use:
1. Unzip the archive.
2. `cd digital-file-store`
3. Edit `backend/.env.example` with your values and copy to `.env`.
4. For backend: run `composer install`, `php artisan key:generate`, `php artisan migrate`.
5. For frontend: `cd frontend && npm install && npm run build && npm run start`.
6. Use `docker-compose` included to run containers quickly.

Docs folder contains setup instructions for Google Drive API and payment gateways (sandbox).
