<?php
class Conexion {

    private $host = "127.0.0.1";
    private $user = "adminComuni";
    private $password = "123456";
    private $db = "comunidb";
    private $port = 3307;
    private $conexion;

    public function __construct() {
        try {
            $this->conexion = new mysqli(
                $this->host,
                $this->user,
                $this->password,
                $this->db,
                $this->port
            );

            if ($this->conexion->connect_error) {
                throw new Exception("Error de conexión: " . $this->conexion->connect_error);
            }

            $this->conexion->set_charset("utf8mb4");

        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function query($sql) {
        $resultado = $this->conexion->query($sql);
        if ($this->conexion->error) {
            throw new Exception("Error en la consulta: " . $this->conexion->error);
        }
        return $resultado;
    }

    public function cerrarConexion() {
        if ($this->conexion) {
            $this->conexion->close();
        }
    }

    public function __destruct() {
        $this->cerrarConexion();
    }
}
?>
