# Setup

Install dependencies:

```bash
composer install
npm install
```

Copy `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Generate a personal access token [for your Github account](https://github.com/settings/tokens)
and edit the `GITHUB_API_TOKEN` variable in the `.env` file. Then change the
database credentials in the same file if they don't match your system and migrate:

```bash
php artisan migrate
```

Data is fetched from Github every thirty minutes, this can be changed at
[`./app/Console/Kernel.php`](./app/Console/Kernel.php) but you can also run
the task anytime using this command:

```bash
php artisan schedule:test
# Choose option 0 (Callback)
```

Check [Laravel task scheduling](https://laravel.com/docs/9.x/scheduling) for
more information.

# Build

```bash
npm run build
```

There's a [bug in vite v3.0.2](https://github.com/vitejs/vite/issues/9295) that
messes up the paths for some files when building on Windows. Replace all `\\` with
`/` in the [`./public_html/build/manifest.json`](./public_html/build/manifest.json)
file after building. For example:

```bash
"resources/css\\app.css"
# Change this to:
"resources/css/app.css"
```

# Deploy on [Hostinger](https://hostinger.com/sarosi)

Copy all the files in the root directory of your domain.
