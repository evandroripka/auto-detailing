<?php
// Set base paths for views and partials
$viewsPath    = __DIR__ . '/../app/views/';
$partialsPath = $viewsPath . 'partials/';

// Get the requested URL from the query string, default to 'home' if not provided
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home';

// Sanitize the URL to allow only alphanumeric characters and hyphens (prevents injection)
$url = preg_replace('/[^a-zA-Z0-9\-]/', '', $url);

// Define the target view file to be loaded
$viewFile = $viewsPath . $url . '.php';

// Include the header partial
require_once $partialsPath . 'header.php';

// Load the corresponding view if it exists
if (file_exists($viewFile)) {
    require_once $viewFile;
} else {
    // Fallback: display a simple 404 page if the requested view doesn't exist
    echo "<section style='padding:80px;text-align:center;'>
            <h1>404 - Page Not Found</h1>
            <p>The page <strong>$url</strong> does not exist.</p>
          </section>";
}

// Include the footer partial
require_once $partialsPath . 'footer.php';
