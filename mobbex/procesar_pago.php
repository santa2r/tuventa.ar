<?php
$url = 'https://api.mobbex.com/p/checkout';
$access_token = '05746efe-27cb-4988-96cb-a586c815d310';
$key = 'i7mbZTSBy61QyX2TBvDWiXCAcaR8paCNdlkxZpts';

$monto = $_POST['monto'];
$descripcion = $_POST['descripcion'];
$cuotas = $_POST['cuotas'];
$nombre = $_POST['nombre'];
$numero = $_POST['numero'];
$vencimiento = $_POST['vencimiento'];
$cvc = $_POST['cvc'];

$data = array(
  'total' => $monto,
  'currency' => 'ARS',
  'description' => $descripcion,
  'installments' => $cuotas,
  'options' => array(
    'card' => array(
      'number' => $numero,
      'exp_month' => substr($vencimiento, 0, 2),
      'exp_year' => '20' . substr($vencimiento, 3, 2),
      'cvc' => $cvc,
      'name' => $nombre
    )
  )
);

$headers = array(
  'Content-Type: application/json',
  'Authorization: Basic ' . base64_encode($access_token . ':' . $key)
);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($curl);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

if ($httpcode == 200) {
  $data = json_decode($response);
  $checkout_url = $data->data->url;

  header('Location: ' . $checkout_url);
  exit();
} else {
  echo 'Error en la solicitud de pago: ' . $response;
}
?>
