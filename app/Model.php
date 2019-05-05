<?php


class Model extends PDO
{
    
    protected $conexion;
    
    public function __construct()
    {
        try {
            $this->conexion = new PDO('mysql:host=' . Config::$mvc_bd_hostname . ';dbname=' . Config::$mvc_bd_nombre . '', Config::$mvc_bd_usuario, Config::$mvc_bd_clave);
            $this->conexion->exec("set names utf8");
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "<p>Error: No puede conectarse con la base de datos.</p>\n";
            echo "<p>Error: " . $e->getMessage();
        }
    }
    
    
    public function conexion($nombre, $password) {
        try {
            $consulta = "SELECT * FROM usuarios WHERE nombre=? AND password=?";
            $result = $this->conexion->prepare($consulta);
            $result->bindParam(1, $nombre);
            $password = hash('sha512', $_POST['password']);
            $result->bindParam(2, $password);
            $result->execute();
            
            if($result->rowCount()>0) {
                return true;
            } else {
                return false;
            }
            
        } catch (PDOException $e) {
            echo "<p>Error: No puede conectarse con la base de datos.</p>\n";
            echo "<p>Error: " . $e->getMessage();
            return false;
        }
    }
    
    public function registrar($nombre, $password, $email) {
        try {
            $consulta = "INSERT INTO usuarios (nombre, password, email) VALUES (?,?,?)";
            $result = $this->conexion->prepare($consulta);
            $result->bindParam(1, $nombre);
            $password = hash('sha512', $_POST['password']);
            $result->bindParam(2, $password);
            $result->bindParam(3, $email);
            $result->execute();
            
            return $result;
            
        } catch(PDOException $e) {
            echo "<p>Error: " . $e->getMessage();
            return false;
        }
    }
    
    public function mostrar() {
        try {
            $consulta = "SELECT * FROM `usuarios`";
            $result = $this->conexion->prepare($consulta);
            $result->execute();
            
            return $result->fetchAll();
            
            
        } catch (PDOException $e) {
            echo "<p>Error: No puede conectarse con la base de datos.</p>\n";
            echo "<p>Error: " . $e->getMessage();
        }
    }
    
    public function dlt($nombre) {
        try {
            $consulta = "DELETE FROM usuarios WHERE nombre=?";
            $result = $this->conexion->prepare($consulta);
            $result->bindParam(1, $nombre);
            $result->execute();
            
            return $result;
            
        } catch(PDOException $e) {
            echo "<p>Error: " . $e->getMessage();
            return false;
        }
    }
    
    public function mostrarGeneros() {
        try {
            $consulta = "SELECT * FROM `genero`";
            $result = $this->conexion->prepare($consulta);
            $result->execute();
            
            return $result->fetchAll();
            
            
        } catch (PDOException $e) {
            echo "<p>Error: No puede conectarse con la base de datos.</p>\n";
            echo "<p>Error: " . $e->getMessage();
        }
    }
    
    public function registrarVideojuego($nombre, $director, $año, $pais, $titulo_original, $sinopsis, $id_genero) {
        try {
            // Inserción del videojuego
            $consulta = "INSERT INTO videojuegos (nombre, director, año, pais, titulo_original, sinopsis) VALUES (?,?,?,?,?,?)";
            $result = $this->conexion->prepare($consulta);
            $result->bindParam(1, $nombre);
            $result->bindParam(2, $director);
            $result->bindParam(3, $año);
            $result->bindParam(4, $pais);
            $result->bindParam(5, $titulo_original);
            $result->bindParam(6, $sinopsis);
            $result->execute();
            
            // ID del videojuego que se ha creado
            $id_videojuego = $this->conexion->lastInsertID();
            
            // Por cada género seleccionado, crear una instancia videojuego-género
            foreach($id_genero as $g) {
                $consulta = "INSERT INTO videojuego_genero (id_videojuego, id_genero) VALUES (?,?)";
                $result = $this->conexion->prepare($consulta);
                $result->bindParam(1, $id_videojuego);
                $result->bindParam(2, $g);
                $result->execute();
            }
            
            return;
            
        } catch(PDOException $e) {
            echo "<p>Error: " . $e->getMessage();
            return false;
        }
    }
    
    public function registrarPelicula($nombre, $director, $año, $duracion, $pais, $titulo_original, $sinopsis, $id_genero) {
        try {
            // Inserción de la película
            $consulta = "INSERT INTO peliculas (nombre, director, año, duracion, pais, titulo_original, sinopsis) VALUES (?,?,?,?,?,?,?)";
            $result = $this->conexion->prepare($consulta);
            $result->bindParam(1, $nombre);
            $result->bindParam(2, $director);
            $result->bindParam(3, $año);
            $result->bindParam(4, $duracion);
            $result->bindParam(5, $pais);
            $result->bindParam(6, $titulo_original);
            $result->bindParam(7, $sinopsis);
            $result->execute();
            
            // ID de la película que se ha creado
            $id_pelicula = $this->conexion->lastInsertID();
            
            // Por cada género seleccionado, crear una instancia película-género
            foreach($id_genero as $g) {
                $consulta = "INSERT INTO pelicula_genero (id_pelicula, id_genero) VALUES (?,?)";
                $result = $this->conexion->prepare($consulta);
                $result->bindParam(1, $id_pelicula);
                $result->bindParam(2, $g);
                $result->execute();
            }
            
            return;
            
        } catch(PDOException $e) {
            echo "<p>Error: " . $e->getMessage();
            return false;
        }
    }
    
    public function registrarSerie($nombre, $director, $año, $temporadas, $episodios, $pais, $titulo_original, $sinopsis, $id_genero) {
        try {
            // Inserción de la serie
            $consulta = "INSERT INTO series (nombre, director, año, temporadas, episodios, pais, titulo_original, sinopsis) VALUES (?,?,?,?,?,?,?,?)";
            $result = $this->conexion->prepare($consulta);
            $result->bindParam(1, $nombre);
            $result->bindParam(2, $director);
            $result->bindParam(3, $año);
            $result->bindParam(4, $temporadas);
            $result->bindParam(5, $episodios);
            $result->bindParam(6, $pais);
            $result->bindParam(7, $titulo_original);
            $result->bindParam(8, $sinopsis);
            $result->execute();
            
            // ID de la serie que se ha creado
            $id_serie = $this->conexion->lastInsertID();
            
            // Por cada género seleccionado, crear una instancia serie-género
            foreach($id_genero as $g) {
                $consulta = "INSERT INTO serie_genero (id_serie, id_genero) VALUES (?,?)";
                $result = $this->conexion->prepare($consulta);
                $result->bindParam(1, $id_serie);
                $result->bindParam(2, $g);
                $result->execute();
            }
            
            return;
            
        } catch(PDOException $e) {
            echo "<p>Error: " . $e->getMessage();
            return false;
        }
    }
    
    public function mostrarVideojuego() {
        try {
            $consulta = "SELECT * FROM `videojuegos`";
            $result = $this->conexion->prepare($consulta);
            $result->execute();
            
            return $result->fetchAll();
            
            
        } catch (PDOException $e) {
            echo "<p>Error: No puede conectarse con la base de datos.</p>\n";
            echo "<p>Error: " . $e->getMessage();
        }
    }
    
    public function mostrarPelicula() {
        try {
            $consulta = "SELECT * FROM `peliculas`";
            $result = $this->conexion->prepare($consulta);
            $result->execute();
            
            return $result->fetchAll();
            
            
        } catch (PDOException $e) {
            echo "<p>Error: No puede conectarse con la base de datos.</p>\n";
            echo "<p>Error: " . $e->getMessage();
        }
    }
    
    public function mostrarSerie() {
        try {
            $consulta = "SELECT * FROM `series`";
            $result = $this->conexion->prepare($consulta);
            $result->execute();
            
            return $result->fetchAll();
            
            
        } catch (PDOException $e) {
            echo "<p>Error: No puede conectarse con la base de datos.</p>\n";
            echo "<p>Error: " . $e->getMessage();
        }
    }
    
}

?>