<?php

namespace Controllers;

use MVC\Router;

class AppointmentController {
    public static function index(Router $router) {

        session_start();

        isAuth();

        $router->render('appointment/index', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
}