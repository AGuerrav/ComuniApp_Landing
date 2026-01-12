<?php
require_once __DIR__ . "/../Controlador/ComunidadController.php";
$controller = new ComunidadController();

function post_str(string $key, int $maxLen = 2000): string {
    $v = trim($_POST[$key] ?? "");
    if ($v === "" || mb_strlen($v) > $maxLen) {
        throw new Exception("Campo inválido: $key");
    }
    return $v;
}
function post_int(string $key, int $min = 0, int $max = 1000000): int {
    $v = $_POST[$key] ?? null;
    if ($v === null || !ctype_digit((string)$v)) {
        throw new Exception("Campo numérico inválido: $key");
    }
    $n = (int)$v;
    if ($n < $min || $n > $max) {
        throw new Exception("Rango inválido: $key");
    }
    return $n;
}

try {
    $action = $_POST["action"] ?? "";

    if ($action === "create") {
        $data = [
            "nombre" => post_str("nombre", 80),
            "descripcion" => post_str("descripcion", 600),
            "imagen" => post_str("imagen", 255),
            "miembros" => post_int("miembros", 0, 999999),
            "eventos" => post_int("eventos", 0, 999999),
            "avistamientos" => post_int("avistamientos", 0, 999999),
        ];
        $controller->crear($data);
        header("Location: comunidades.php?ok=created");
        exit;
    }

    if ($action === "update") {
        $id = post_int("id", 1, 999999999);
        $data = [
            "nombre" => post_str("nombre", 80),
            "descripcion" => post_str("descripcion", 600),
            "imagen" => post_str("imagen", 255),
            "miembros" => post_int("miembros", 0, 999999),
            "eventos" => post_int("eventos", 0, 999999),
            "avistamientos" => post_int("avistamientos", 0, 999999),
        ];
        $controller->actualizar($id, $data);
        header("Location: comunidades.php?ok=updated");
        exit;
    }

    if ($action === "delete") {
        $id = post_int("id", 1, 999999999);
        $controller->eliminar($id);
        header("Location: comunidades.php?ok=deleted");
        exit;
    }

    throw new Exception("Acción no válida");

} catch (Exception $e) {
    header("Location: comunidades.php?err=" . urlencode($e->getMessage()));
    exit;
}
