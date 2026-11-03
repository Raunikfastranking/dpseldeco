<?php
// Router for `php -S` — mirrors .htaccess / web.config rewrite rules for local dev.

$root = __DIR__;
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Existing files and directories: let the built-in server handle them.
if ($uri !== '/' && file_exists($root . $uri)) {
    return false;
}

// Strip trailing slash on extensionless URLs (skip real directories).
if (substr($uri, -1) === '/' && !is_dir($root . $uri)) {
    header('Location: ' . rtrim($uri, '/'), true, 301);
    return true;
}

// /proxy/name -> /proxy/name.php
if (preg_match('#^/proxy/([A-Za-z0-9_-]+)/?$#i', $uri, $m)) {
    $file = $root . '/proxy/' . $m[1] . '.php';
    if (file_exists($file)) {
        require $file;
        return true;
    }
}

// /, /home and /index -> index.php
if (preg_match('#^/(|home|index)$#i', $uri)) {
    require $root . '/index.php';
    return true;
}

// /blog/slug -> detail.php?slug=
if (preg_match('#^/blog/([A-Za-z0-9-]+)/?$#i', $uri, $m)) {
    $_GET['slug'] = $m[1];
    require $root . '/detail.php';
    return true;
}

// /view/slug -> detail-view.php?slug=
if (preg_match('#^/view/([A-Za-z0-9-]+)/?$#i', $uri, $m) && file_exists($root . '/detail-view.php')) {
    $_GET['slug'] = $m[1];
    require $root . '/detail-view.php';
    return true;
}

// Clean URL -> existing .php file
if (file_exists($root . $uri . '.php')) {
    require $root . $uri . '.php';
    return true;
}

// Fall through to 404 page.
http_response_code(404);
require $root . '/404.php';
return true;
