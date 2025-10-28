<?php
header('Content-Type: application/json');

// Path to the fonts JSON file
$fontsFile = $_SERVER['DOCUMENT_ROOT'] . '/data/fonts/list.json';
if (!file_exists($fontsFile)) {
    http_response_code(500);
    echo json_encode(["error" => "Font list not found"]);
    exit;
}

// Read and decode the JSON file
$fontsData = json_decode(file_get_contents($fontsFile), true);
if (!$fontsData) {
    http_response_code(500);
    echo json_encode(["error" => "Unable to read font list"]);
    exit;
}

// Retrieve GET parameters
$id = isset($_GET['id']) ? $_GET['id'] : null;
$categories = isset($_GET['categories']) ? $_GET['categories'] : null;
$categoryName = isset($_GET['category']) ? $_GET['category'] : null;

/*
 * 1. /api/v1/fonts
 * Returns all font IDs.
 */
if (!$id && !$categories && !$categoryName) {
    echo json_encode(array_keys($fontsData['fonts']));
    exit;
}

/*
 * 2. /api/v1/fonts/id/{font-id}
 * Returns the data (charset, metadata, etc.) for a specific font ID.
 */
if ($id) {
    if (isset($fontsData['fonts'][$id])) {
        echo json_encode($fontsData['fonts'][$id]);
        exit;
    } else {
        http_response_code(404);
        echo json_encode(["error" => "Font not found"]);
        exit;
    }
}

/*
 * 3. /api/v1/fonts/categories
 * Returns all available font categories.
 */
if ($categories && $categories === 'true') {
    echo json_encode($fontsData['categories']);
    exit;
}

/*
 * 4. /api/v1/fonts/categories/{category}
 * Returns all font IDs belonging to a specific category.
 */
if ($categoryName) {
    if (isset($fontsData['categories'][$categoryName])) {
        echo json_encode($fontsData['categories'][$categoryName]);
        exit;
    } else {
        http_response_code(404);
        echo json_encode(["error" => "Category not found"]);
        exit;
    }
}

// Default response for invalid or unsupported requests
http_response_code(400);
echo json_encode(["error" => "Invalid request"]);