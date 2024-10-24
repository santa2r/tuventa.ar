<?php
/*
// Obtén los datos enviados por Mobbex
$requestData = file_get_contents('php://input');
$decodedData = json_decode($requestData, true);

// Extrae los campos relevantes
$paymentOrden = $decodedData['data']['payment']['reference'];
$paymentStatus = $decodedData['data']['payment']['status']['text'];
$paytransactionId = $decodedData['data']['payment']['source']['transaction']['transactionId'];
// Crea un arreglo con los datos relevantes
$relevantData = [
    'statuscode' => $paymentStatus,
    'orden' => $paymentOrden,
    'transactionId' => $paytransactionId,
];

// Ruta al archivo donde se almacenarán los datos
$filePath = 'webhook_data.json';

// Verifica si el archivo existe
if (!file_exists($filePath)) {
    // Si no existe, crea un archivo vacío con un arreglo vacío
    file_put_contents($filePath, json_encode([]));
}

// Lee los datos actuales del archivo
$currentData = json_decode(file_get_contents($filePath), true);

// Agrega los nuevos datos al arreglo existente
$currentData[] = $relevantData;

// Guarda los datos actualizados en el archivo
file_put_contents($filePath, json_encode($currentData));

// Muestra los datos relevantes (opcional)
echo json_encode($relevantData);*/

// Verifica si existe el contenido en 'php://input'
if (isset($_SERVER['CONTENT_TYPE']) && $_SERVER['CONTENT_TYPE'] === 'application/json') {
    // Obtén los datos enviados por Mobbex
    $requestData = file_get_contents('php://input');
    $decodedData = json_decode($requestData, true);

    // Extrae los campos relevantes
    $paymentOrden = $decodedData['data']['payment']['reference'];
    $paymentStatus = $decodedData['data']['payment']['status']['text'];
    $paytransactionId = $decodedData['data']['payment']['source']['transaction']['transactionId'];

    // Actualiza los datos en tu base de datos (aquí debes implementar tu lógica específica)
    // Por ejemplo, puedes usar una conexión a la base de datos y ejecutar una consulta SQL para actualizar los registros.

    // Ejemplo de conexión a la base de datos (reemplaza con tus propios detalles de conexión):
    $servername = 'localhost';
    $username = 'u549248595_tiendavirtual';
    $password = 'Swm*495975';
    $dbname = 'u549248595_tiendavirtual';


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Actualiza los datos en la tabla correspondiente
        $sql = "UPDATE pedido SET status = :statuscode, referenciacobro = :transactionId WHERE idpedido = :orden";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':statuscode', $paymentStatus);
        $stmt->bindParam(':transactionId', $paytransactionId);
        $stmt->bindParam(':orden', $paymentOrden);
        $stmt->execute();

        // Cierra la conexión
        $conn = null;
    } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
    }
} else {
    // Redirige al usuario a otra página o realiza la acción que desees
    header('Location: index.php'); // Cambia 'index.php' por la URL deseada
    exit;
}
?>