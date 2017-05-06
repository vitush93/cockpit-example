<?php

// load all the good stuff
require_once 'admin/bootstrap.php';
require_once 'vendor/autoload.php';

$app = new \Slim\App();

// configure dependencies
$container = $app->getContainer();
$container['view'] = new \Slim\Views\PhpRenderer('./templates/');

// home page route
$app->get("/", function (\Slim\Http\Request $request, \Slim\Http\Response $response) {
    $posts = collection('Posts')->find()->toArray();

    $response = $this->view->render($response, 'home.php', ['posts' => $posts]);
    return $response;
});

// single post page
$app->get("/{slug}", function (\Slim\Http\Request $request, \Slim\Http\Response $response, $args) {
    $post = collection('Posts')->findOne(['Title_slug' => $args['slug']]);
    if ($post == null) { // post not found - display error page
        $response = $this->view->render($response, '404.php');

        return $response;
    }

    $response = $this->view->render($response, 'post.php', ['post' => $post]);
    return $response;
});

$app->run();