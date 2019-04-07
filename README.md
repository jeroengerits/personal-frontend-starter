# Frontend Starter
Very basic starter for frontend experiments. DO NOT use in production.

------

## Requirements
- PHP
- Nodejs

## Installation
- Install PHP dependencies
```bash
$ composer install
```
- Install Javascript dependencies
```bash
$ npm install
```

## Compiling Assets
- Development
```bash
$ npm run dev
```
- Watch changes
```bash
$ npm run watch
```
- Production
```bash
$ npm run prod
```

## Local Webserver
```bash
php -S localhost:8000 -t web/
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