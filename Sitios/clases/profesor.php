<?php
namespace Sitios\Clases;
use Includes\ConexionBD as Conexion;
include_once "includes/autoload.php";
class profesor {
    private $id_prof;
    private $nombre;
    private $idioma;

    public function mostrarProfesorporId($id_prof){
        try {
            $conexionDB = new Conexion();
            $conn = $conexionDB->abrirConexion();
            $sql = "SELECT id_prof, nombre, idioma, inicio, tipo FROM profesor JOIN programacion 
            ON profesor.id_prof = programacion.id_prof";

            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
            $conexionDB->cerrarConexion();
            return $stmt;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function insertarProfesor(String $nombre, String $idioma){
        try{
            $conexionDB = new Conexion();
            $conn = $conexionDB->abrirConexion();
            $sql = "INSERT INTO profesor(nombre, idioma)
                    VALUES(?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $nombre, \PDO::PARAM_STR);
            $stmt->bindParam(2, $idioma, \PDO::PARAM_STR);
            
            $stmt->execute();
            $filas = $stmt->rowCount();

            $conexionDB->cerrarConexion();
            return $filas;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
    }

