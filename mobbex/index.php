<!DOCTYPE html>
<html>
<head>
  <title>Pago en cuotas con Mobbex</title>
</head>
<body>
  <h1>Pago en cuotas con Mobbex 1</h1>
  <form method="post" action="procesar_pago.php">
    <label for="monto">Monto:</label>
    <input type="text" name="monto" id="monto" required><br>
    <label for="descripcion">Descripción:</label>
    <input type="text" name="descripcion" id="descripcion" required><br>
    <label for="cuotas">Cuotas:</label>
    <input type="number" name="cuotas" id="cuotas" min="1" max="12" required><br>
    <label for="nombre">Nombre en la tarjeta:</label>
    <input type="text" name="nombre" id="nombre" required><br>
    <label for="numero">Número de tarjeta:</label>
    <input type="text" name="numero" id="numero" required><br>
    <label for="vencimiento">Fecha de vencimiento:</label>
    <input type="text" name="vencimiento" id="vencimiento" placeholder="MM/AA" required><br>
    <label for="cvc">CVC:</label>
    <input type="text" name="cvc" id="cvc" required><br>
    <input type="submit" value="Pagar">
  </form>
</body>
</html>
