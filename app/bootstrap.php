<?php
// Start the session
session_cache_limiter(false);
session_start();

// Composer autoloading
require '../vendor/autoload.php';

// Include config
require 'config/config.php';

// Custom Twig view class for Slim
require 'lib/Twig.php';

// Twig Settings
\Slim\Extras\Views\Twig::$twigOptions = array(
    'autoescape'       => true,
    'auto_reload'      => true,
    'cache'            => realpath('../app/tmp'),
    'optimizations'    => -1,
    'strict_variables' => false,
);
