<?php
/**
 * Dynamic Base Path Calculation
 * This script determines the relative path from the current page to the project root.
 * It works by comparing the filesystem path of the calling script to the project root.
 */

// The root directory is the parent of the 'components' directory where this file resides
$project_root = realpath(__DIR__ . '/..');

// The absolute path to the script being executed
$current_script = realpath($_SERVER['SCRIPT_FILENAME']);

// Normalize slashes for cross-platform compatibility
$project_root = str_replace('\\', '/', $project_root);
$current_script = str_replace('\\', '/', $current_script);

// Determine the depth by comparing the paths
// We count how many directories are between the project root and the current script
$root_parts = explode('/', trim($project_root, '/'));
$script_parts = explode('/', trim($current_script, '/'));

// The number of levels deep is the difference in path segments
// (minus 1 because script_parts includes the filename itself)
$depth = count($script_parts) - count($root_parts) - 1;

// Ensure depth is not negative
$depth = max(0, $depth);

// Build the base path prefix
$base_path = ($depth > 0) ? str_repeat('../', $depth) : '';
?>