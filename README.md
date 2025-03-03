<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Setting Up a Laravel Application After Cloning from GitHub

1. Install composer dependencies:
```sh
composer install
```
> Copy the content of `.env.example` to a new file called `.env`.
2. Generate the application key:
```sh
php artisan key:generate
```
> Configure your database information in your `.env`.
3. Run migrations:
```sh
php artisan migrate
```
4. Booting up the development server:
```sh
php artisan serve
```

## Running Laravel Pint Before Pushing Changes
Laravel Pint is a code style fixer for PHP. Before pushing your changes to GitHub, you should run Pint to ensure your code follows Laravel's coding standards.

```sh
./vendor/bin/pint
```

## Recommended VS Code Settings
To ensure a consistent development experience, add the following settings to your `settings.json` `user file` `ctrl+shift+p` in VS Code:

```json
{
    "files.autoSave": "afterDelay",
    "files.trimTrailingWhitespace": true,
    "files.trimFinalNewlines": true,
    "files.eol": "\n",
}
```

These settings will:
- **Automatically save files after a short delay** instead of requiring manual saving.
- **Remove trailing whitespace** at the end of lines to keep files clean.
- **Ensure the final line of a file doesn’t have extra newlines**, maintaining a consistent file structure.
- **Set the end-of-line character to `\n` (LF)** to avoid inconsistencies between different operating systems.
