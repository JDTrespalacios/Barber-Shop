<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\APIController;
use Controllers\AdminController;
use Controllers\LoginController;
use Controllers\AppointmentController;
use Controllers\ServicioController;

$router = new Router();


// Iniciar Sesión
$router->get("/", [LoginController::class, 'login']);
$router->post("/", [LoginController::class, 'login']);
$router->get("/logout", [LoginController::class, 'logout']);

// Recuperar Password
$router->get("/forgot", [LoginController::class, 'forgot']);
$router->post("/forgot", [LoginController::class, 'forgot']);
$router->get("/recover", [LoginController::class, 'recover']);
$router->post("/recover", [LoginController::class, 'recover']);

// Crear cuenta
$router->get("/create-account", [LoginController::class, 'create']);
$router->post("/create-account", [LoginController::class, 'create']);

// Confirmar cuenta
$router->get("/validate-account", [LoginController::class, 'validate']);
$router->get("/message", [LoginController::class, 'message']);

// Área privada
$router->get("/appointment", [AppointmentController::class, 'index']);
$router->post("/admin", [AdminController::class, 'index']);

// API de citas
$router->get("/api/servicios", [APIController::class, 'index']);
$router->post("/api/citas", [APIController::class, 'guardar']);
$router->post("api/eliminar", [APIController::class, 'eliminar']);

// CRUD de Servicios
$router->get("/servicios", [ServicioController::class, 'index']);
$router->get("/servicios/crear", [ServicioController::class, 'crear']);
$router->post("/servicios/crear", [ServicioController::class, 'crear']);
$router->get("/servicios/actualizar", [ServicioController::class, 'actualizar']);
$router->post("/servicios/actualizar", [ServicioController::class, 'actualizar']);
$router->post("/servicios/eliminar", [ServicioController::class, 'eliminar']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();