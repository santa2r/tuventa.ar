<?php
$tipopago = $data['tipopago']; 

if($tipopago == '3'){
    $subtotal = 0;
    $total = 0;
    foreach ($data['mobbex'] as $producto) {
        $subtotal += $producto['precio'] * $producto['cantidad'];
    }
    $total = $subtotal + COSTOENVIO;

    // Aca utilizo la api de mobbex para pasar el pago
    $dia = date("d");
    $mes = date("m");
    $ano = date("y");

    //Mis API
    $apiKey = APIKEY;
    $token = TOKEN;

    //Api de prueba
    //$apiKey = 'zJ8LFTBX6Ba8D611e9io13fDZAwj0QmKO1Hn1yIj';
    //$token = 'd31f0721-2f85-44e7-bcc6-15e19d1a53cc';

    $monto= $total;
    $descirpcion = "Orden de compra desde tuventa.ar numero ".$data['orden'];
    $reference = $data['orden'];
    $data = [
        "total" => $monto,
        "description" => $descirpcion,
        "test" => false,
        "due" => [
            "day" => $dia,
            "month" => $mes,
            "year" => $ano
        ],
        "secondDue" => [
            "days" => 0,
            "surcharge" => 30
        ],
        "return_url" => "https://tuventa.ar/checkout",
        "webhook" => "https://tuventa.ar/transaccion.php",
        "reference" => $reference,
        "options" => [
            "smsMessage" => "Enviamos la orden generada para su pago"
        ],
        "installments" => [
            "enabled" => true,
            "count" => 6, // Cambia esta cantidad según tus necesidades
            "differential" => false
        ]
    ];

    $ch = curl_init('https://api.mobbex.com/p/payment_order');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'cache-control: no-cache',
        'Content-Type: application/json',
        'x-lang: es',
        'x-access-token: ' . $token,
        'x-api-key: ' . $apiKey,
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $response = curl_exec($ch);

    if ($response === false) {
        die('Error al realizar la solicitud');
    }

    curl_close($ch);

    $responseData = json_decode($response, true);

    if ($responseData['result'] && isset($responseData['data']['url'])) {
        $paymentUrl = $responseData['data']['url'];
        //echo '<script>open("'. $paymentUrl .'");</script>';
        echo '<script>window.location.href = "'. $paymentUrl .'";</script>';
        exit;
    } else {
        echo 'Error al generar el enlace de pago: ' . $responseData['error']['message'];
    }
}else{
    
    echo '<script>window.location.href = "'.base_url().'/checkout?status=1330&transactionId=133";</script>';
}
?>