<?php
require_once __DIR__ . "/../Controlador/ComunidadController.php";
$controller = new ComunidadController();

$comunidades = $controller->listar();

$editId = isset($_GET["edit"]) ? (int)$_GET["edit"] : 0;
$editRow = $editId ? $controller->obtener($editId) : null;

$ok = $_GET["ok"] ?? "";
$err = $_GET["err"] ?? "";
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Admin · Comunidades</title>
  <style>
    body{font-family:system-ui, Arial; margin:24px; background:#f6f7fb;}
    .wrap{max-width:1100px; margin:0 auto;}
    .grid{display:grid; grid-template-columns: 1fr 1fr; gap:18px;}
    .card{background:white; border-radius:14px; padding:40px; box-shadow:0 10px 30px rgba(0,0,0,.06);}
    h1{margin:0 0 10px;}
    label{display:block; font-size:14px; margin-top:10px;}
    input, textarea{width:100%; padding:10px; border-radius:10px; border:1px solid #d7d9e3;}
    textarea{min-height:90px; resize:vertical;}
    .row{display:grid; grid-template-columns: 1fr 1fr 1fr; gap:10px;}
    .btn{padding:10px 14px; border-radius:10px; border:0; cursor:pointer; font-weight:600;}
    .btn-primary{background:#56c7c3;}
    .btn-danger{background:#ff6b6b;}
    .btn-muted{background:#e9ecf6;}
    table{width:100%; border-collapse:collapse; font-size:14px;}
    th, td{padding:10px; border-bottom:1px solid #eee;}
    .msg{padding:10px 12px; border-radius:10px; margin:10px 0;}
    .ok{background:#e9fff1; border:1px solid #b7f0c9;}
    .err{background:#fff0f0; border:1px solid #ffc5c5;}
    @media (max-width: 900px){ .grid{grid-template-columns: 1fr;} .row{grid-template-columns: 1fr;} }
  </style>
</head>
<body>
<div class="wrap">
  <h1>Panel Admin · Comunidades</h1>

  <?php if ($ok): ?>
    <div class="msg ok">Acción realizada: <?= htmlspecialchars($ok) ?></div>
  <?php endif; ?>
  <?php if ($err): ?>
    <div class="msg err">Error: <?= htmlspecialchars($err) ?></div>
  <?php endif; ?>

  <div class="grid">
    <div class="card">
      <h2><?= $editRow ? "Editar comunidad #".(int)$editRow["id"] : "Crear comunidad" ?></h2>

      <form method="post" action="acciones_comunidades.php">
        <input type="hidden" name="action" value="<?= $editRow ? "update" : "create" ?>"/>
        <?php if ($editRow): ?>
          <input type="hidden" name="id" value="<?= (int)$editRow["id"] ?>"/>
        <?php endif; ?>

        <label>Nombre</label>
        <input name="nombre" maxlength="80" required
               value="<?= htmlspecialchars($editRow["nombre"] ?? "") ?>"/>

        <label>Descripción</label>
        <textarea name="descripcion" maxlength="600" required><?= htmlspecialchars($editRow["descripcion"] ?? "") ?></textarea>

        <?php
        $imgDir = __DIR__ . "/../Vistas/img/comunidades";
        $imgFiles = [];
        if (is_dir($imgDir)) {
            foreach (scandir($imgDir) as $f) {
                if ($f === '.' || $f === '..') continue;
                if (is_file($imgDir . '/' . $f)) $imgFiles[] = $f;
            }
        }
        ?>
        <label>Imagen</label>
        <?php $hasImage = isset($editRow["imagen"]) && $editRow["imagen"] !== ''; ?>
        <select name="imagen" required>
          <option value="" disabled <?= $hasImage ? '' : 'selected' ?>>Selecciona una...</option>
          <?php foreach ($imgFiles as $f):
            $val = 'comunidades/' . $f;
            $sel = ($hasImage && $editRow["imagen"] === $val) ? 'selected' : '';
          ?>
            <option value="<?= htmlspecialchars($val) ?>" <?= $sel ?>><?= htmlspecialchars($f) ?></option>
          <?php endforeach; ?>
        </select>
          

        <div class="row">
          <div>
            <label>Miembros</label>
            <input name="miembros" inputmode="numeric" pattern="\d{1,6}" maxlength="6" required
                   value="<?= htmlspecialchars($editRow["miembros"] ?? "0") ?>"/>
          </div>
          <div>
            <label>Eventos</label>
            <input name="eventos" inputmode="numeric" pattern="\d{1,6}" maxlength="6" required
                   value="<?= htmlspecialchars($editRow["eventos"] ?? "0") ?>"/>
          </div>
          <div>
            <label>Avistamientos</label>
            <input name="avistamientos" inputmode="numeric" pattern="\d{1,6}" maxlength="6" required
                   value="<?= htmlspecialchars($editRow["avistamientos"] ?? "0") ?>"/>
          </div>
        </div>

        <div style="display:flex; gap:10px; margin-top:14px;">
          <button class="btn btn-primary" type="submit">
            <?= $editRow ? "Guardar cambios" : "Crear" ?>
          </button>
          <?php if ($editRow): ?>
            <a class="btn btn-muted" href="comunidades.php" style="text-decoration:none; display:inline-flex; align-items:center;">Cancelar</a>
          <?php endif; ?>
        </div>
      </form>
    </div>

    <div class="card">
      <h2>Listado</h2>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Miembros</th>
            <th>Eventos</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($comunidades as $c): ?>
          <tr>
            <td><?= (int)$c["id"] ?></td>
            <td><?= htmlspecialchars($c["nombre"]) ?></td>
            <td><?= htmlspecialchars($c["miembros"]) ?></td>
            <td><?= htmlspecialchars($c["eventos"]) ?></td>
            <td style="display:flex; gap:8px;">
              <a class="btn btn-muted" style="text-decoration:none;" href="comunidades.php?edit=<?= (int)$c["id"] ?>">Editar</a>

              <form method="post" action="acciones_comunidades.php" onsubmit="return confirm('¿Eliminar esta comunidad?');">
                <input type="hidden" name="action" value="delete"/>
                <input type="hidden" name="id" value="<?= (int)$c["id"] ?>"/>
                <button class="btn btn-danger" type="submit">Eliminar</button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
      <p style="color:#666; margin-top:12px;">
        Nota: esta URL no está enlazada desde el menú público.
      </p>
    </div>
  </div>
</div>
</body>
</html>
