<?php
// Get the current URL
$currentUrl = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');

// Define icon sizes and types
$iconSizes = ["16x16", "57x57", "72x72", "114x114", "120x120", "144x144", "152x152"];
$iconType = "image/png";

// Generate icons array
$icons = [];
foreach ($iconSizes as $size) {
    $icons[] = [
        "sizes" => $size,
        "type" => $iconType,
        "src" => "./img/icon/icon-" . $size . ".png"
    ];
}

// Define manifest content
$manifestContent = json_encode([
    "scope" => $currentUrl . "/",
    "start_url" => $currentUrl . "/",
    "display" => "standalone",
    "icons" => $icons,
    "name" => "Afya Kwa Walimu",
    "short_name" => "Walimu Care",
    "theme_color" => "#c3a22c",
    "background_color" => "#ffffff"
]);

// Write content to manifest.webmanifest
file_put_contents("static/manifest.webmanifest", $manifestContent);

