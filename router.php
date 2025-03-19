<?php
ini_set('memory_limit', '1024M'); // Increase memory limit
error_reporting(E_ALL);
ini_set('display_errors', 1);
error_log("Memory Usage Before Execution: " . memory_get_usage());

// Continue with the rest of your script...

// Prevent output before headers
ob_start();

// Correct database file path
require_once __DIR__ . "/includes/config.php"; // Ensure this file exists

// Get the route from URL or set default to 'home'
$route = isset($_GET['route']) ? $_GET['route'] : '/news';

// If no route is set (direct access to /verification/), load index.php
if (!isset($_GET['route']) || empty($_GET['route'])) {
    require __DIR__ . "/index.php";
    exit;
}

// Define allowed routes
$routes = [
    '/news' => 'index.php',
    'Articles' => 'category.php',
    'Article_read' => 'news-details.php',
    'contact_us' => 'contact-us.php',
    'about_us' => 'about-us.php',
    'Article_search' => 'search.php',
    'card_download_process' => 'index_buttons/card_download_process.php',
    'certificate' => 'index_buttons/certificate.php',
    'certificate_not_ready' => 'index_buttons/certificate_not_ready.php',
    'idcard_verify' => 'index_buttons/idcard_verify.php',
    'notready_letter' => 'index_buttons/notready_letter.php',
    'print_idcard' => 'index_buttons/print_idcard.php',
    'print_not_ready' => 'index_buttons/print_not_ready.php',
    'visiting_card' => 'index_buttons/visiting_card.php',
    'visiting_not_ready' => 'index_buttons/visiting_not_ready.php',
    'submit_application' => 'submit_application.php',
    'user_image' => 'uploads/user_image',
    'company' => 'uploads/company',
    'app_letter' => 'images/App-letter.png',
    'certificate_letter' => 'images/CERTIFICATE-PNG.png',
    'visiting_card_front' => 'images/visiting_card_front.png',
    'visiting_card_back' => 'images/visiting_card_back.png',
];

// Serve user image dynamically
if ($route === "user_image" && isset($_GET['file'])) {
    $file = __DIR__ . "/uploads/user_image/" . basename($_GET['file']);

    if (file_exists($file)) {
        header("Content-Type: image/jpeg||jpg||png||webp"); // Adjust for different file types
        readfile($file);
        exit;
    } else {
        http_response_code(404);
        exit;
    }
}

// Serve Company image dynamically
if ($route === "company" && isset($_GET['file'])) {
    $file = realpath(__DIR__ . '/../administration/uploads/' . basename($_GET['file']));

    if (file_exists($file)) {
        // Get file extension
        $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));

        // Set correct MIME type
        $mimeTypes = [
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'png' => 'image/png',
            'webp' => 'image/webp'
        ];

        if (isset($mimeTypes[$extension])) {
            header("Content-Type: " . $mimeTypes[$extension]);
            readfile($file);
            exit;
        } else {
            http_response_code(400); // Bad request
            echo "Invalid image type!";
            exit;
        }
    } else {
        http_response_code(404);
        echo "Image not found!";
        exit;
    }
}

// Function to serve static images
function serveImage($filePath, $contentType)
{
    if (file_exists($filePath)) {
        header("Content-Type: " . $contentType);
        readfile($filePath);
        exit;
    } else {
        http_response_code(404);
        exit;
    }
}

// Serve static image routes
if ($route === "app_letter") {
    serveImage(__DIR__ . "/images/App-letter.png", "image/png");
}
if ($route === "certificate_letter") {
    serveImage(__DIR__ . "/images/CERTIFICATE-PNG.png", "image/png");
}
if ($route === "visiting_card_front") {
    serveImage(__DIR__ . "/images/visiting_card_front.png", "image/png");
}
if ($route === "visiting_card_back") {
    serveImage(__DIR__ . "/images/visiting_card_back.png", "image/png");
}

// Check if route exists and file exists
if (array_key_exists($route, $routes)) {
    $file_path = __DIR__ . "/" . $routes[$route];

    if (file_exists($file_path)) {
        require $file_path;
    } else {
        error_log("Error: File not found - " . $file_path);
        require __DIR__ . "/index_buttons/404.php"; // Load 404 page if file is missing
    }
} else {
    require __DIR__ . "/index_buttons/404.php"; // Load 404 page for invalid routes
}

// Prevent any whitespace from breaking headers
ob_end_flush();
?>