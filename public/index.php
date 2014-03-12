<?php

require '../app/bootstrap.php';

$twigView = new \Slim\Views\Twig();

// Configure Twig
$twigView->parserOptions = array(
  'autoescape'       => true,
  'auto_reload'      => true,
  'cache'            => realpath('../app/tmp'),
  'charset'          => 'utf-8',
  'optimizations'    => -1,
  'strict_variables' => false,
);

// Configure Slim
$app = new \Slim\Slim(array(
  'debug'          => true,
  'log.enabled'    => true,
  'log.level'      => \Slim\Log::WARN,
  'templates.path' => '../app/views',
  'view'           => $twigView
));


/**
 * Index (GET)
 */
$app->get('/', function () use ($app) {
  $app->render('index.html', array('data' => 'testing'));
});


// Run it
$app->run();
