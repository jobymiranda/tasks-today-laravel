# Tasks for Today Management System in Laravel

IT0049 TSA3 implementation using Laravel MVC, SQLite, migrations, Eloquent models, seeders, and Blade views. This is a separate Laravel project and does not replace the existing CodeIgniter `tasks-today` system or the Laravel POS project.

## Requirements

- PHP 8.2+
- Composer
- SQLite

## Setup on Windows PowerShell

```powershell
composer install
Copy-Item .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

Open `http://127.0.0.1:8000`.

## Pages

- `/` - Welcome page showing only tasks scheduled for today
- `/tasks` - Complete task list ordered by task date
- `/profile` - The single seeded user record
- `/about` - Developer and system information

## TSA3 implementation

- `tasks` migration: `title`, `status` with a `pending` default, `task_date`, and timestamps.
- `users` migration: unique `username`, `full_name`, and `email`.
- `Task` and `User` Eloquent models.
- `Tsa3Seeder` creates 8 tasks across 5 dates, including today, and exactly 1 user.
- `HomeController` filters tasks with `whereDate('task_date', today())`.
- `TaskController` retrieves every task ordered by `task_date`.
- `ProfileController` retrieves the single user record.
- The interface uses the CasaForma-inspired responsive dashboard style.

## Reset and reseed the local database

```powershell
php artisan migrate:fresh --seed
```

## Verification

```powershell
php artisan migrate:status
php artisan route:list
php artisan view:cache
php artisan test
```

## Developer

Joby Mae M. Miranda  
IT0049 Web System Technologies
