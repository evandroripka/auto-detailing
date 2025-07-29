<?php
// index.php - Front Controller

// Paths
$appPath = __DIR__ . '/../app/';
$controllersPath = $appPath . 'controllers/';
$viewsPath = $appPath . 'views/';
$partialsPath = $viewsPath . 'partials/';

global $base;
$base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
$base = $base === '/' ? '' : $base;

// Get URL parameter or default to 'home'
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home';

// Sanitize URL - only letters, numbers, hyphen
$url = preg_replace('/[^a-zA-Z0-9\-]/', '', $url);

// Map URL to Controller class name (ex: home -> HomeController)
$controllerName = ucfirst($url) . 'Controller';
$controllerFile = $controllersPath . $controllerName . '.php';

// Include header partial
require_once $partialsPath . 'header.php';

// Check if controller exists and load
if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controller = new $controllerName();
    // Call the default index method
    $controller->index();
} else {
    // 404 fallback
    echo "<section style='padding:80px;text-align:center;'>
            <h1>404 - Page Not Found</h1>
            <p>The page <strong>$url</strong> does not exist.</p>
          </section>";
}

// Include footer partial
require_once $partialsPath . 'footer.php';
