# Frontend Starter
Basic starter for frontend throw-away experiments and design explorations. You probably don't like it or need it. Also, please DO NOT USE IN PRODUCTION.

------

## Out of the box
- Twig Templates
- Tailwind CSS 
- IBM Plex font (sans, serif, mono and all variants)
- Laravel Mix for asset compilation
- Purge CSS Optimizer
- .env file support
- primitive router (switch/case)

## Installation
```bash
composer install && npm install
```

## Local Webserver
```bash
php -S localhost:8000 -t web/
```

## Compiling Assets
- **Development** - does not minify and purge the css
```bash
npm run dev
```
- **Watch changes** - recompile if a file changes, does not minify and purge the css
```bash
npm run watch
```
- **Production** - compiles assets the most optimal way
```bash
npm run prod
```

## Defining Routes
You can define routes in the ```src/index.php``` file. 
```php
case '/' :
    echo $twig->render('pages/index.twig', ['title' => "Hello World!"]);
    break;
default:
    echo $twig->render('pages/404.twig', []);
    break;
```