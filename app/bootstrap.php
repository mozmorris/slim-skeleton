<?php
// Start the session
session_cache_limiter(false);
session_start();

// Composer autoloading
require '../vendor/autoload.php';

// Include config
require 'config/config.php';
