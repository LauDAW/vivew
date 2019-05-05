<?php session_start(); ?>
<?php

class Controller {
    
        public function inicio() {
            require __DIR__ . '/templates/inicio.php';
        }
        
        public function videojuegos() {
            require __DIR__ . '/templates/videojuegos.php';
        }
    
        public function loggear() {
            require __DIR__ . '/templates/login.php';
        }
        
        public function registro() {
            require __DIR__ . '/templates/registro.php';
        }
        
        public function usuarios() {
            $model = new Model();
            $usuario = $model->mostrar();
            
            $params = array('usuario' => $usuario, 'mensaje' => 'Vacío');
            
            require __DIR__ . '/templates/usuarios.php';
        }
    
        public function login() {
            
            if(isset($_REQUEST['login'])) {
                $nombre = $_REQUEST['nombre'];
                $password = $_REQUEST['password'];
                
                $model = new Model();
                
                if($model->conexion($nombre, $password)) {
                    $_SESSION['login'] = $nombre;
                    header('Location: index.php?con=inicio');
                }
                
                $params = array('mensaje' => 'Nombre o password incorrecto');
                require __DIR__ .'/templates/login.php';
            } 
        }
        
        public function registrar() {
            if(isset($_REQUEST['registrar'])) {
                $nombre = $_REQUEST['nombre'];
                $password = $_REQUEST['password'];
                $email = $_REQUEST['email'];
                
                $model = new Model();
                $model->registrar($nombre, $password, $email);
                header('Location: index.php?con=loggear');
            }
        }
        
        public function salir() {
            if(isset($_SESSION['login'])) {
                session_destroy();
            }
            header('Location: index.php?con=loggear');
        }
        
        public function dlt() {
            if(isset($_REQUEST['dlt'])) {
                $nombre = $_REQUEST['nombre'];
                if($nombre != 'admin') {
                    $model = new Model();
                    $dlt = $model->dlt($nombre);
                    
                    header('Location: index.php?con=usuarios');
                } else {
                    $message = "No puedes borrarte a ti mismo";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    
                    require __DIR__ .'/templates/inicio.php';
                }
            }
        }
        
        public function perfil() {
            require __DIR__ . '/templates/perfil.php';
        }
        
        
        
        public function insertar() {
            $model = new Model();
            $genero = $model->mostrarGeneros();
            
            $params = array('genero' => $genero);
            
            require __DIR__ . '/templates/insertar.php';
        }
        
        public function registrarVideojuego() {
            if(isset($_REQUEST['registrarVideojuego'])) {
                $nombre = $_REQUEST['nombre'];
                $director = $_REQUEST['director'];
                $año = $_REQUEST['año'];
                $pais = $_REQUEST['pais'];
                $titulo_original = $_REQUEST['titulo_original'];
                $sinopsis = $_REQUEST['sinopsis'];
                $generos = $_REQUEST['generos'];
                
                
                $model = new Model();
                $model->registrarVideojuego($nombre, $director, $año, $pais, $titulo_original, $sinopsis, $generos);
                header('Location: index.php?con=insertar');
            }
        }
        
        public function registrarPelicula() {
            if(isset($_REQUEST['registrarPelicula'])) {
                $nombre = $_REQUEST['nombre'];
                $director = $_REQUEST['director'];
                $duracion = $_REQUEST['duracion'];
                $año = $_REQUEST['año'];
                $pais = $_REQUEST['pais'];
                $titulo_original = $_REQUEST['titulo_original'];
                $sinopsis = $_REQUEST['sinopsis'];
                $generos = $_REQUEST['generos'];
                
                
                $model = new Model();
                $model->registrarPelicula($nombre, $director, $duracion, $año, $pais, $titulo_original, $sinopsis, $generos);
                header('Location: index.php?con=insertar');
            }
            
        }
        
        public function registrarSerie() {
            if(isset($_REQUEST['registrarSerie'])) {
                $nombre = $_REQUEST['nombre'];
                $director = $_REQUEST['director'];
                $año = $_REQUEST['año'];
                $temporadas = $_REQUEST['temporadas'];
                $episodios = $_REQUEST['episodios'];
                $pais = $_REQUEST['pais'];
                $titulo_original = $_REQUEST['titulo_original'];
                $sinopsis = $_REQUEST['sinopsis'];
                $generos = $_REQUEST['generos'];
                
                
                $model = new Model();
                $model->registrarSerie($nombre, $director, $año, $temporadas, $episodios, $pais, $titulo_original, $sinopsis, $generos);
                header('Location: index.php?con=insertar');
            }
            
        }
        
        public function creados() {
            $model = new Model();
            $videojuego = $model->mostrarVideojuego();
            $pelicula = $model->mostrarPelicula();
            $serie = $model->mostrarSerie();
            
            $params = array('videojuego' => $videojuego, 'pelicula' => $pelicula, 'serie' => $serie, 'mensaje' => 'Vacío');
            
            require __DIR__ . '/templates/creados.php';
        }
       
        
        
}

?>