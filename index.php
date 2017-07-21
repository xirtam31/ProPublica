<?php
require 'vendor/autoload.php';
require_once 'ProPublicaApiInfo.php';

$loader = new Twig_Loader_Filesystem('/Users/placko/Web/ProPublica/templates');
$twig = new Twig_Environment($loader);

$a[] = ('Bryan');
$b = new ProPublicaApiInfo('530196605');
$c = $b->getCompensationOfficer();

echo $twig->render('twig_test.twig', array('tester'=>$c));



?>