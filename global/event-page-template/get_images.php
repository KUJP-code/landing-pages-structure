<?php
// Set the content type to JSON
header('Content-Type: application/json');

// The relative path to your gallery folder
$gallery_path = '.images/gallery/';

// Scan the directory for files
$files = scandir($gallery_path);

// Filter out '.' and '..' which are directory navigation aliases
$files = array_diff($files, array('.', '..'));

// Create an empty array to store image paths
$images = [];

// Loop through the files and build the full relative path for each image
foreach ($files as $file) {
    // Optional: Check if the file is an actual image (e.g., jpg, png)
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
        $images[] = $gallery_path . $file;
    }
}

// Output the array of image paths as a JSON object
echo json_encode(array_values($images)); // array_values re-indexes the array
?>