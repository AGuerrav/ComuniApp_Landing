<?php
require_once __DIR__ . "/../Config/conexion.php";

class ComunidadModel {
    private Conexion $cn;
    private mysqli $db;

    public function __construct() {
        $this->cn = new Conexion();
        $this->db = $this->cn->getConexion();
        $this->db->set_charset("utf8mb4");
    }

    public function listar(): array {
        $sql = "SELECT id, nombre, descripcion, imagen, miembros, eventos, avistamientos
                FROM comunidades
                ORDER BY id DESC";
        $result = $this->db->query($sql);

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function obtenerPorId(int $id): ?array {
        $sql = "SELECT id, nombre, descripcion, imagen, miembros, eventos, avistamientos
                FROM comunidades
                WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $res = $stmt->get_result();
        $row = $res->fetch_assoc();
        return $row ?: null;
    }

    public function crear(array $data): bool {
        $sql = "INSERT INTO comunidades (nombre, descripcion, imagen, miembros, eventos, avistamientos)
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);

        $nombre = $data["nombre"];
        $descripcion = $data["descripcion"];
        $imagen = $data["imagen"];
        $miembros = (int)$data["miembros"];
        $eventos = (int)$data["eventos"];
        $avistamientos = (int)$data["avistamientos"];

        $stmt->bind_param("sssiii", $nombre, $descripcion, $imagen, $miembros, $eventos, $avistamientos);
        return $stmt->execute();
    }

    public function actualizar(int $id, array $data): bool {
        $sql = "UPDATE comunidades
                SET nombre = ?, descripcion = ?, imagen = ?, miembros = ?, eventos = ?, avistamientos = ?
                WHERE id = ?";
        $stmt = $this->db->prepare($sql);

        $nombre = $data["nombre"];
        $descripcion = $data["descripcion"];
        $imagen = $data["imagen"];
        $miembros = (int)$data["miembros"];
        $eventos = (int)$data["eventos"];
        $avistamientos = (int)$data["avistamientos"];

        $stmt->bind_param("sssiiii", $nombre, $descripcion, $imagen, $miembros, $eventos, $avistamientos, $id);
        return $stmt->execute();
    }

    public function eliminar(int $id): bool {
        $sql = "DELETE FROM comunidades WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
