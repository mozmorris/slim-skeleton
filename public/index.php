<?php

require '../app/bootstrap.php';

// Instantiate Twig view class
$twigView = new \Slim\Extras\Views\Twig();

// Instantiate and configure Slim
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
