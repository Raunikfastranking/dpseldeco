<?php
// Router for PHP built-in server — emulates web.config URL rewrite rules.
$docroot = __DIR__;
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$path = $docroot . $uri;

$staticExt = '#\.(jpg|jpeg|png|gif|css|js|pdf|svg|ico|webp|apk|zip|rar|txt|xml|json|mp4|webm|ogg|map|woff|woff2|ttf|eot)$#i';

// Existing real file -> let built-in server serve it
if ($uri !== '/' && is_file($path)) {
    if (substr($path, -4) === '.php') {
        require $path;
        return true;
    }
    return false;
}

// Directory -> index.php inside (Directory index support)
if (is_dir($path)) {
    $dir = rtrim($path, '/');
    if (is_file($dir . '/index.php')) {
        require $dir . '/index.php';
        return true;
    }
}

// Normalize trailing slash on extensionless URLs (skip real directories)
if (strlen($uri) > 1 && substr($uri, -1) === '/' && !is_dir(rtrim($path, '/'))) {
    header('Location: ' . rtrim($uri, '/'), true, 301);
    return true;
}

// /proxy/name -> proxy/name.php
if (preg_match('#^/proxy/([A-Za-z0-9_-]+)/?$#i', $uri, $m) && is_file($docroot . '/proxy/' . $m[1] . '.php')) {
    require $docroot . '/proxy/' . $m[1] . '.php';
    return true;
}

// /home and /index -> index.php
if (preg_match('#^/(home|index)/?$#i', $uri)) {
    require $docroot . '/index.php';
    return true;
}

// /blog/slug -> detail.php?slug=
if (preg_match('#^/blog/([A-Za-z0-9-]+)/?$#i', $uri, $m) && is_file($docroot . '/detail.php')) {
    $_GET['slug'] = $m[1];
    require $docroot . '/detail.php';
    return true;
}

// /view/slug -> detail-view.php?slug=
if (preg_match('#^/view/([A-Za-z0-9-]+)/?$#i', $uri, $m) && is_file($docroot . '/detail-view.php')) {
    $_GET['slug'] = $m[1];
    require $docroot . '/detail-view.php';
    return true;
}

// Clean URL -> existing .php file (e.g. /about-us -> about-us.php)
if (!preg_match($staticExt, $uri) && is_file($path . '.php')) {
    require $path . '.php';
    return true;
}

// Root -> index.php
if ($uri === '/' || $uri === '') {
    require $docroot . '/index.php';
    return true;
}

// CMS page template route: single-segment slug, no static ext, no local .php stub
if (preg_match('#^/([^/]+)/?$#i', $uri, $m)
    && !preg_match($staticExt, $m[1])
    && !is_file($docroot . '/' . $m[1] . '.php')
    && is_file($docroot . '/page-template.php')) {
    $_GET['page'] = $m[1];
    require $docroot . '/page-template.php';
    return true;
}

// 404
http_response_code(404);
if (is_file($docroot . '/404.php')) {
    require $docroot . '/404.php';
} else {
    echo '404 Not Found';
}
return true;
