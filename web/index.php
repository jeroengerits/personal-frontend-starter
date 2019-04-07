<?php declare(strict_types=1);

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

define('BASE_PATH', dirname(__DIR__));
define('VENDOR_PATH', BASE_PATH . '/vendor');

require_once VENDOR_PATH . '/autoload.php';

(Dotenv\Dotenv::create(BASE_PATH))->load();

$twig = new Environment(new FilesystemLoader(BASE_PATH . '/src/views'));

switch ($_SERVER['REQUEST_URI']) {
    case '/' :
        echo $twig->render('pages/index.twig', ['title' => "Hello World!"]);
        break;
    default:
        echo $twig->render('pages/404.twig', []);
        break;
}
