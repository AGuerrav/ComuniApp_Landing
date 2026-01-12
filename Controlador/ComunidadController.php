<?php
require_once __DIR__ . "/../Modelo/ComunidadModel.php";

class ComunidadController {
    private ComunidadModel $model;

    public function __construct() {
        $this->model = new ComunidadModel();
    }

    public function listar(): array {
        return $this->model->listar();
    }

    public function obtener(int $id): ?array {
        return $this->model->obtenerPorId($id);
    }

    public function crear(array $data): bool {
        return $this->model->crear($data);
    }

    public function actualizar(int $id, array $data): bool {
        return $this->model->actualizar($id, $data);
    }

    public function eliminar(int $id): bool {
        return $this->model->eliminar($id);
    }
}
