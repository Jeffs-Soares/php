<?php

use Alura\Mvc\Controller\DeleteVideoController;
use Alura\Mvc\Controller\EditVideoController;
use Alura\Mvc\Controller\NewVideoController;
use Alura\Mvc\Controller\VideoFormController;
use Alura\Mvc\Controller\VideoListController;
use Alura\Mvc\Controller\LoginFormController;
use Alura\Mvc\Controller\LoginController;
use Alura\Mvc\Controller\LogoutController;

return [
    'GET|/' => VideoListController::class,
    'GET|/cadastrar-video'  => VideoFormController::class,
    'POST|/cadastrar-video' => NewVideoController::class,
    'GET|/atualizar-video'  => VideoFormController::class,
    'POST|/atualizar-video' => EditVideoController::class,
    'GET|/deletar-video'    => DeleteVideoController::class,
    'GET|/login'            => LoginFormController::class,
    'POST|/login'           => LoginController::class,
    'GET|/logout'           => LogoutController::class,

];


?>