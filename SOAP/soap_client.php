<?php
$client = new SoapClient(null, array(
    'location' => 'http://localhost/soap/soap_server.php',
    'uri' => 'http://localhost/soap_service',
    'trace' => 1
));

// // Menambahkan user baru
// $response = $client->__soapCall("createUser", array("Budi A", "budi@example.com", "987654321"));
// echo $response . "\n";

// Mendapatkan semua users
$users = $client->__soapCall("getUsers", array());
print_r($users);

// // Mendapatkan user dengan ID spesifik
// $user = $client->__soapCall("getUser", array(3));
// print_r($user);

// // Memperbarui user dengan ID 
// $response = $client->__soapCall("updateUser", array(2, "John Updated", "john_updated@example.com", "987654321"));
// echo $response . "\n";

// // Menghapus user dengan ID 
$response = $client->__soapCall("deleteUser", array(2));
echo $response . "\n";
?>
