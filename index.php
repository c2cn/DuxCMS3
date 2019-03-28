<?php
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', str_replace('\\', '/', __DIR__) . '/');
}
require __DIR__ . '/vendor/autoload.php';
if (!is_dir(__DIR__ . '/vendor/')) {
    exit('Composer not installed');
}
if (version_compare(PHP_VERSION, '7.1', '<')) {
    exit('PHP version cannot be less than 7.1');
}
\dux\Start::run();