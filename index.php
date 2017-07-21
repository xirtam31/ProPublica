<?php
require 'vendor/autoload.php';
require_once 'ProPublicaApiInfo.php';

$test_filter = new Twig_Filter('test_filt', 'ProPublicaApiInfo::orgInfoGeneral');

$loader = new Twig_Loader_Filesystem('/Users/placko/Web/ProPublica/templates');
$twig = new Twig_Environment($loader);
$twig->addFilter($test_filter);

echo $twig->render('twig_test.php');



?>