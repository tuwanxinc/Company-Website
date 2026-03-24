# Tuwanx Shared Hosting Deployment Guide

This guide addresses common issues encountered when deploying Tuwanx to shared hosting environments (like cPanel, Hostinger, GoDaddy, etc.).

## 🚨 Critical Fix: "Vite Manifest Not Found" Error

If you see an error like `ViteManifestNotFoundException` or `Vite manifest not found at: .../public/build/manifest.json`, it means the compiled asset files are missing from your server.

### Step 1: Upload the Build Folder
You must upload the `public/build` folder from your local machine to your server.

1.  On your local machine, ensure you have run:
    ```bash
    npm run build
    ```
    This creates a `build` folder inside your `public` directory.

2.  **Upload this folder to your server.**
    *   **If your public files are in `public_html`:**
        Upload the `build` folder to `public_html/build`.
    *   **If you are pointing your domain to `tuwanx-core/public`:**
        Upload the `build` folder to `tuwanx-core/public/build`.

**Note:** The `public/build` folder is often ignored by git (in `.gitignore`), so it might not be uploaded automatically if you are using git to deploy. You often need to upload it manually via FTP/SFTP.

### Step 2: AppServiceProvider Fix (Already Applied)
We have added a fix to `app/Providers/AppServiceProvider.php` that automatically detects if you are using `public_html` and adjusts the internal paths accordingly. **Ensure you upload the updated `app/Providers/AppServiceProvider.php` file to your server.**

## Standard Deployment Steps

1.  **Upload Files:**
    *   Upload all project files to a folder (e.g., `tuwanx-core`) above your `public_html` if possible.
    *   Move the contents of `public` to `public_html`.
    *   Edit `public_html/index.php` to update the paths:
        ```php
        require __DIR__.'/../tuwanx-core/vendor/autoload.php';
        $app = require __DIR__.'/../tuwanx-core/bootstrap/app.php';
        ```

2.  **Environment Setup:**
    *   Upload `.env` file with production settings (`APP_ENV=production`, `APP_DEBUG=false`).
    *   Set your database credentials in `.env`.

3.  **Run Commands (via SSH or Cron):**
    *   `composer install --optimize-autoloader --no-dev`
    *   `php artisan migrate`
    *   `php artisan config:cache`
    *   `php artisan route:cache`
    *   `php artisan view:cache`
    *   `php artisan storage:link`

## Troubleshooting

### 🎨 "Design Broken" / CSS Not Loading
If your site loads but looks like unstyled HTML or "broken":

1.  **Mixed Content Error (Most Common):**
    Your site is on HTTPS but trying to load CSS via HTTP.
    *   **Fix:** We have added `URL::forceScheme('https')` to `AppServiceProvider.php`. Upload this file again.
    *   **Check:** Ensure your `.env` has `APP_URL=https://tuwanx.com`.

2.  **Wrong Build Path:**
    *   Right-click the page > Inspect > Console.
    *   If you see **404 Not Found** for `app.css` or `app.js`:
        *   Your `public/build` folder might be in the wrong place.
        *   Ensure `build` is inside `public_html` (e.g., `public_html/build`).
    *   If you see **403 Forbidden**:
        *   Check permissions of the `build` folder (should be 755) and files (644).

3.  **Clear Caches:**
    Run these commands on your server (or via route):
    ```bash
    php artisan view:clear
    php artisan config:clear
    ```

*   **500 Internal Server Error:** Check `storage/logs/laravel.log` for details.
*   **404 on Assets:** Ensure `public/build` exists and permissions are correct (755 for directories, 644 for files).
*   **Symlink Error:** Shared hosting often prevents `php artisan storage:link`. You may need to manually create a symlink or use a PHP script to do it.
