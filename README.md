# CommonRig

Aplicación web para que los músicos se presten instrumentos y equipo de forma gratuita. Trabajo Final del Máster Universitario en Desarrollo de Sitios y Aplicaciones Web de la UOC, curso 2026-2027.

## Estructura del repositorio

- `backend/` con la API REST (Laravel 13 y Laravel Sanctum)
- `frontend/` con la aplicación Angular 22

## Requisitos

- PHP 8.3 y Composer 2 (por ejemplo, con XAMPP)
- Node.js 24 y npm
- Angular CLI 22 (`npm install -g @angular/cli`)
- Git

## Instalación en local

Clonar el repositorio.

```
git clone https://github.com/UgurKRS/commonrig.git
cd commonrig
```

Instalar y arrancar el backend.

```
cd backend
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

En Linux o macOS se usa `cp .env.example .env`. Si `php artisan migrate` pregunta si se quiere crear la base de datos SQLite, hay que responder `yes`. La API queda disponible en http://localhost:8000.

Instalar y arrancar el frontend, en otra terminal.

```
cd frontend
npm install
ng serve
```

La aplicación se abre en http://localhost:4200.

## Estado del proyecto

PEC2 (noviembre de 2026). Estructura inicial del proyecto, con Laravel, la API y Sanctum instalados en el backend y la aplicación Angular creada en el frontend. Por ahora el backend usa SQLite en local. La base de datos MySQL y las funcionalidades se desarrollan en la PEC3.
