<?php
require_once dirname(__DIR__).'/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(dirname(__DIR__).'/templates');
$twig = new Twig_Environment($loader, [
    'cache' => dirname(__DIR__).'/var/cache/twig',
]);

echo $twig->render('index.html', ['name' => 'SimpleTest']);
