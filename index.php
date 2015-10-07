<?php

require_once("vendor/autoload.php");

$app = new \Slim\App();

$app->add(new AuthMiddleware);

$app->post("/auth", "auth");

$app->get("/secret", "secret");

$app->get("/", "home");
