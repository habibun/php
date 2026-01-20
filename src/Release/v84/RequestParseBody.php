<?php
/**
 * 📌 What This Feature Is — Short Description
 *
 * RFC1867 is the standard for HTML file uploads and multipart form requests.
 *
 * Before PHP 8.4, PHP only parsed multipart/form-data automatically when the HTTP method was POST.
 *
 * With PHP 8.4, you can manually parse multipart form data (including file uploads) in PUT, PATCH, or other non‑POST requests using request_parse_body().
 */


// ==========================
// OLD WAY (pre‑PHP 8.4)
// ==========================

// Suppose client sends PUT /upload with multipart/form-data
var_dump($_POST);  // []
var_dump($_FILES); // []

// You’d need to manually parse php://input, which is complex.

// ==========================
// NEW WAY (PHP 8.4+)
// ==========================

try {
    // Parse body for any HTTP verb
    [$post, $files] = request_parse_body();

    var_dump($post);  // populated form fields
    var_dump($files); // uploaded file info
} catch (\RequestParseBodyException $e) {
    echo "Parsing failed: " . $e->getMessage();
}

