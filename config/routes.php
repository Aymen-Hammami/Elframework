<?php
//this file is relative for each application ,configure your own routes !
const ROUTES = [
    'home' => [
      'controller' => App\Controller\MainController::class,
      'method' => 'home'
    ],
    'article'=>[
      'controller'=>App\Controller\ArticleController::class,
      'method' => 'show'
    ]
  ];
  