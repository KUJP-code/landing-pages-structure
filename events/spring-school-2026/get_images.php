<?php
// Set the content type to JSON
header('Content-Type: application/json');

// Path for the SERVER to FIND the files from its location in /php/
$server_path = 'assets/images/gallery/';

// Path for the BROWSER to DISPLAY the images from index.html
$web_path = 'assets/images/gallery/';

// Check if the directory actually exists before trying to scan it
if (!is_dir($server_path)) {
    // If it doesn't exist, return an empty JSON array and stop
    echo json_encode([]);
    exit;
}

// Scan the directory for files using the server path
$files = scandir($server_path);

// Filter out '.' and '..'
$files = array_diff($files, array('.', '..'));

$images = [];

// Loop through the files...
foreach ($files as $file) {
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
        // ...and build the final URL using the web path
        $images[] = $web_path . $file;
    }
}

// Output the clean array for the browser
echo json_encode(array_values($images));
?>