<?php
function formatDuration($seconds)
{
    $hours = floor($seconds / 3600);
    $minutes = floor(($seconds % 3600) / 60);
    $secs = $seconds % 60;

    $formattedHours = str_pad($hours, 2, '0', STR_PAD_LEFT);
    $formattedMinutes = str_pad($minutes, 2, '0', STR_PAD_LEFT);
    $formattedSeconds = str_pad($secs, 2, '0', STR_PAD_LEFT);

    return "$formattedHours:$formattedMinutes:$formattedSeconds";
}
$durasi = 3661; // dalam detik
echo formatDuration($durasi); // Output: "01:01:01"
?>