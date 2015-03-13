<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array (
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.twig');

    });

    $app->get("/count", function() use ($app) {
        $testDifferentWords = new RepeatCounter;
        $result = $testDifferentWords->countRepeats($_GET['string'],$_GET['word'] );

        return $app['twig']->render('count.twig', array('your_count' => $result));

    });

    return $app;
?>
