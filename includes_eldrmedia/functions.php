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

/**
 * Given the current page key, return ['prev' => [...], 'next' => [...]]
 * where both always exist (wrapping at ends).
 */
function getPrevNext(string $currentKey, string $baseUrl = '/'): array {
    $list = include __DIR__ . '/case_studies.php';
    $keys = array_keys($list);
    $count = count($keys);
    $currentIndex = array_search($currentKey, $keys, true);

    if ($currentIndex === false) {
        // Fallback to first if somehow missing
        $currentIndex = 0;
    }

    // Compute previous and next indices, wrapping with modulo
    $prevIndex = ($currentIndex - 1 + $count) % $count;
    $nextIndex = ($currentIndex + 1) % $count;

    $prevKey = $keys[$prevIndex];
    $nextKey = $keys[$nextIndex];

    return [
        'prev' => [
            'url'   => $baseUrl . ltrim($list[$prevKey]['url'], '/'),
            'label' => $list[$prevKey]['label'],
        ],
        'next' => [
            'url'   => $baseUrl . ltrim($list[$nextKey]['url'], '/'),
            'label' => $list[$nextKey]['label'],
        ],
    ];
}
