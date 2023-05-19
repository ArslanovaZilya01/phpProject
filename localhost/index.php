<?php

declare(strict_types=1);

$uriParts = parse_url($_SERVER["REQUEST_URI"]);

switch ($uriParts['path'] ?? '') {
    case '':
    case '/':
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'main.php';
        break;
    case '/12class':
        require_once __DIR__ . DIRECTORY_SEPARATOR . '12class.html';
        break;
    case '/34class':
        require_once __DIR__ . DIRECTORY_SEPARATOR . '34class.html';
        break;
    case '/56class':
        require_once __DIR__ . DIRECTORY_SEPARATOR . '56class.html';
        break;
    case '/7class':
        require_once __DIR__ . DIRECTORY_SEPARATOR . '7class.html';
        break;
    default:
        http_response_code(404);
        require_once __DIR__.DIRECTORY_SEPARATOR . '404.php';
}