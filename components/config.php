<?php
// Determine the base path relative to the project root
// Assuming the project root is 'html_site'
$current_path = $_SERVER['PHP_SELF'];
$path_parts = explode('/', trim($current_path, '/'));

// Find the index of 'html_site' in the path
$root_index = array_search('html_site', $path_parts);

if ($root_index !== false) {
    // Correct depth: total parts - (index of root + 1 for root itself + 1 for the filename)
    $depth = count($path_parts) - $root_index - 2;
    $base_path = ($depth > 0) ? str_repeat('../', $depth) : '';
} else {
    // Fallback if 'html_site' is not in the path (e.g. hosted at domain root)
    $base_path = ''; 
}
?>