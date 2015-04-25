<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/ScrabbleArray.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app){
        return $app['twig']->render('form.twig');
    });

    $app->post("/view_score", function() use ($app){


        $input=$_POST['input_str'];
        if(!empty($input)){

            $new_scrabble= new ScrabbleArray;
            $result= $new_scrabble->ScrabbleChecker($input);



        return $app['twig']->render('results.twig' , array("resultPoint" => $result));

        }

       else{


           return $app['twig']->render('error.twig');



       }
    });

    return $app;

?>
