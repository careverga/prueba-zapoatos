<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calzado</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <main>
    <form action="factura_cabeza.php" method="post">
      <div>
        <label for="FECHA_EXPEDICION">Fecha de Expedición:</label>
        <input type="date" name="FECHA_EXPEDICION" id="FECHA_EXPEDICION" required />
      </div>
      <div>
        <label for="FECHA_ENTREGA">Fecha de Entrega:</label>
        <input type="date" name="FECHA_ENTREGA" id="FECHA_ENTREGA" required />
      </div>
      <div>
        <label for="COD_CLIENTE">Código de Cliente:</label>
        <input type="text" name="COD_CLIENTE" id="COD_CLIENTE" required />
      </div>
      <div>
        <label for="COD_EMPLEADO">Código de Empleado:</label>
        <input type="text" name="COD_EMPLEADO" id="COD_EMPLEADO" required />
      </div>
      <div>
        <button type="submit">Guardar</button>
      </div>
    </form>
    <?php
    include '../a-main.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $fecha_expedicion = $_POST['FECHA_EXPEDICION'];
      $fecha_entrega = $_POST['FECHA_ENTREGA'];
      $codigo_cliente = $_POST['COD_CLIENTE'];
      $codigo_empleado = $_POST['COD_EMPLEADO'];
      $conexion = conexion();
      $sql = "INSERT INTO factura_cabeza (FECHA_EXPEDICION, FECHA_ENTREGA, COD_CLIENTE, COD_EMPLEADO)
            VALUES ('$fecha_expedicion', '$fecha_entrega', $codigo_cliente, $codigo_empleado)";
      mysqli_query($conexion, $sql) or die(err($conexion));
    }
    ?>
  </main>
</body>

</html>