<?php
$uri =parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
];

function routeToControllers($uri,$routes)
{
    if(array_key_exists($uri,$routes)){
        require $routes[$uri];
    }
    else
    {
        abort(404);
    }
}
function abort($code){
    http_response_code($code);
    require "views/{$code}.php";
    die();
}


routeToControllers($uri,$routes);