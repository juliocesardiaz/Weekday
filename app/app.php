<?php
	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../src/Weekday.php";
	
	$app = new Silex\Application();
	
	$app->register(new Silex\Provider\TwigServiceProvider(), array(
		'twig.path' => __DIR__.'/../views'
	));
	
	$app->get('/', function() use ($app) {
		return $app['twig']->render('home.html.twig');
	});
	
	$app->get('/day', function() use ($app) {
		$date = new Weekday;
		$theDay = $date->dayOfTheWeek($_GET['day'], $_GET['month'], $_GET['year']);
		return $app['twig']->render('day.html.twig', array('day' => $theDay));
	});
	return $app;
?>