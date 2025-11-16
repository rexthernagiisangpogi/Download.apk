<?php
// Set error reporting
error_reporting(0);

// Define allowed files
$allowed_files = [
    'app-release.apk' => [
        'name' => 'TODA GO_v1.0.0.apk',
        'path' => 'uploads/app-release.apk',
        'mime' => 'application/vnd.android.package-archive'
    ]
];

// Get the requested file
$file_key = isset($_GET['file']) ? $_GET['file'] : '';

// Check if the requested file is allowed
if (empty($file_key) || !isset($allowed_files[$file_key])) {
    header('HTTP/1.0 404 Not Found');
    die('File not found.');
}

$file = $allowed_files[$file_key];
$filepath = $file['path'];

// Check if file exists
if (!file_exists($filepath)) {
    header('HTTP/1.0 404 Not Found');
    die('File not found.');
}

// Get file size
$filesize = filesize($filepath);

// Set headers for download
header('Content-Description: File Transfer');
header('Content-Type: ' . $file['mime']);
header('Content-Disposition: attachment; filename="' . $file['name'] . '"');
header('Content-Length: ' . $filesize);
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Expires: 0');

// Clear output buffer
if (ob_get_level()) {
    ob_end_clean();
}

// Read the file and output it to the browser
$chunkSize = 1024 * 1024; // 1MB chunks
$handle = fopen($filepath, 'rb');

if ($handle === false) {
    die('Error opening file');
}

while (!feof($handle)) {
    echo fread($handle, $chunkSize);
    ob_flush();
    flush();
}

fclose($handle);
exit;
?>
