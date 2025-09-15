<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false; // serve the requested resource as-is.
}



function dump(...$args) {
        echo '<pre>';
        var_dump(...$args);
        echo '</pre>';  
}

spl_autoload_register(function($class) {
    $class = substr($class, 4);
    require_once __DIR__ . "/../src/$class.php";
    
});


// require_once __DIR__ . '/../src/Router.php';
// require_once __DIR__ . '/../src/DB.php';

use App\Controllers\PublicController as PC;

$router = new App\Router();
dump($router);
$db= new App\DB();
dump($db);
$controller = new PC();
dump($controller);





// switch($_SERVER['REQUEST_URI']) {
//     case '/':
//         $title = 'World news';  
//         $posts = [
//     ['title' => 'World news 1', 'author' => 'Pets', 'published' => '12.09.2025', 'body' => 'Some world news 1 body'],
//     ['title' => 'World news 2', 'author' => 'Maali', 'published' => '11.09.2025', 'body' => 'Some world news 2 body'],
//     ['title' => 'World news 3', 'author' => 'Annika', 'published' => '10.09.2025', 'body' => 'Some world news 3 body'],
//     ['title' => 'World news 4', 'author' => 'Mats', 'published' => '09.09.2025', 'body' => 'Some world news 4 body'],
//   ];

//      include __DIR__ . '/../views/index.php';
//      break;
//     case '/us':
//         $title = 'U.S news';
//         $posts = [
//     ['title' => 'U.S news 1', 'author' => 'Pets', 'published' => '12.09.2025', 'body' => 'Some U.S news 1 body'],
//     ['title' => 'U.S news 2', 'author' => 'Maali', 'published' => '11.09.2025', 'body' => 'Some U.S news 2 body'],
//     ['title' => 'U.S news 3', 'author' => 'Annika', 'published' => '10.09.2025', 'body' => 'Some U.S news 3 body'],
//     ['title' => 'U.S news 4', 'author' => 'Mats', 'published' => '09.09.2025', 'body' => 'Some U.S news 4 body'],
//   ];
//     include __DIR__ .'/../views/us.php';
//     default:
//         echo "404 Not Found";
//         break;
// }
