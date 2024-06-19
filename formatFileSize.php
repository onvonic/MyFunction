<?php
function formatFileSize($bytes)
{
    $KB = 1024;
    $MB = $KB * 1024;
    $GB = $MB * 1024;

    if ($bytes < $KB) {
        return $bytes . ' bytes';
    } elseif ($bytes < $MB) {
        return round($bytes / $KB, 2) . ' KB';
    } elseif ($bytes < $GB) {
        return round($bytes / $MB, 2) . ' MB';
    } else {
        return round($bytes / $GB, 2) . ' GB';
    }
}

// Contoh penggunaan:
$fileSizeInBytes = 123456789;
$formattedSize = formatFileSize($fileSizeInBytes);
echo $formattedSize; // Output: "117.74 MB"
