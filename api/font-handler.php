<?php
header('Content-Type: application/json; charset=utf-8');

// Path to fonts list
// $fontsFile = __DIR__ . '/../data/fonts/list.json';
//
// if (!file_exists($fontsFile)) {
//     http_response_code(500);
//         echo json_encode(["error" => "Font list not found at path: " . $fontsFile]);
//             exit;
//             }
//
//             $fontsData = json_decode(file_get_contents($fontsFile), true);
//             if (!$fontsData) {
//                 http_response_code(500);
//                     echo json_encode(["error" => "Font list cannot be read or is invalid JSON"]);
//                         exit;
//                         }
//
//                         // GET parameters
//                         $id = $_GET['id'] ?? null;
//                         $categories = $_GET['categories'] ?? null;
//                         $categoryName = $_GET['category'] ?? null;
//
//                         // Return all font IDs
//                         if (!$id && !$categories && !$categoryName) {
//                             echo json_encode(array_keys($fontsData['fonts']));
//                                 exit;
//                                 }
//
//                                 // Return font details by ID
//                                 if ($id) {
//                                     if (isset($fontsData['fonts'][$id])) {
//                                             echo json_encode($fontsData['fonts'][$id]);
//                                                 } else {
//                                                         http_response_code(404);
//                                                                 echo json_encode(["error" => "Font not found"]);
//                                                                     }
//                                                                         exit;
//                                                                         }
//
//                                                                         // Return all categories
//                                                                         if ($categories === 'true') {
//                                                                             echo json_encode($fontsData['categories']);
//                                                                                 exit;
//                                                                                 }
//
//                                                                                 // Return fonts in a specific category
//                                                                                 if ($categoryName) {
//                                                                                     if (isset($fontsData['categories'][$categoryName])) {
//                                                                                             echo json_encode($fontsData['categories'][$categoryName]);
//                                                                                                 } else {
//                                                                                                         http_response_code(404);
//                                                                                                                 echo json_encode(["error" => "Category not found"]);
//                                                                                                                     }
//                                                                                                                         exit;
//                                                                                                                         }
//
//                                                                                                                         // Invalid request
//                                                                                                                         http_response_code(400);
//                                                                                                                         echo json_encode(["error" => "Invalid request"]);
//                                                                                                                        
