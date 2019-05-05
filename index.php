<?php
require_once __DIR__ . '/app/Config.php';
require_once __DIR__ . '/app/Model.php';
require_once __DIR__ . '/app/Controller.php';

$map = array(
    'inicio'        => array('controller' => 'Controller', 'action' => 'inicio'),
    'videojuegos'   => array('controller' => 'Controller', 'action' => 'videojuegos'),
    'login'         => array('controller' => 'Controller', 'action' => 'login'),
    'loggear'       => array('controller' => 'Controller', 'action' => 'loggear'),
    'salir'         => array('controller' => 'Controller', 'action' => 'salir'),
    'registro'      => array('controller' => 'Controller', 'action' => 'registro'),
    'registrar'     => array('controller' => 'Controller', 'action' => 'registrar'),
    'perfil'        => array('controller' => 'Controller', 'action' => 'perfil'),
    'usuarios'      => array('controller' => 'Controller', 'action' => 'usuarios'),
    'dlt'      => array('controller' => 'Controller', 'action' => 'dlt'),
    'perfil'      => array('controller' => 'Controller', 'action' => 'perfil'),
    'insertar'      => array('controller' => 'Controller', 'action' => 'insertar'),
    'registrarVideojuego' => array('controller' => 'Controller', 'action' => 'registrarVideojuego'),
    'registrarPelicula' => array('controller' => 'Controller', 'action' => 'registrarPelicula'),
    'registrarSerie' => array('controller' => 'Controller', 'action' => 'registrarSerie'),
    'creados' => array('controller' => 'Controller', 'action' => 'creados')
);



if (isset($_GET['con'])) {
    $controlador = $_GET['con'];
    if (isset($map[$controlador])) {
        $ruta = $controlador;
    } else {
        
        header('Status: 404 Not Found');
        echo '<html><body><h1>Error 404: No existe la ruta <i>' .
            $controlador . '</p></body></html>';
            exit;
    }
} else {
    $ruta = 'inicio';
}

$route = $map[$ruta];

if (method_exists($route['controller'],$route['action'])) {
    call_user_func(array(new $route['controller'], $route['action']));
} else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>Error 404: El controlador <i>' .
        $route['controller'] .'->' . $route['action'] . '</i> no existe</h1></body></html>';
}


?>