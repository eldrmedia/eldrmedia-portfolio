<?php
// functions.php
function getBreadcrumbs(string $baseUrl = '/'): array {
    // 1. Load our label map
    $labels = include __DIR__ . '/breadcrumb_labels.php';

    // 2. Trim leading/trailing slashes and split
    $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    $segments = $path === '' ? [] : explode('/', $path);

    // 3. Build up breadcrumbs
    $breadcrumbs = [];
    $accumulated = '';
    // Always start with Home
    $breadcrumbs[] = [
        'url'   => $baseUrl,
        'label' => $labels[''] ?? 'Home'
    ];

    foreach ($segments as $i => $segment) {
        $accumulated .= '/' . $segment;
        // If this is a directory and not index.php, you might skip 'index.php'
        // or strip the .php extension:
        $segmentName = preg_replace('/\.php$/', '', $segment);
        // Lookup human label (fallback to ucfirst)
        $label = $labels[$segmentName] ?? ucfirst(str_replace(['-', '_'], ' ', $segmentName));
        $breadcrumbs[] = [
            'url'   => $baseUrl . trim($accumulated, '/'),
            'label' => $label
        ];
    }

    return $breadcrumbs;
}
