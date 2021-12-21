<?php

// $servername = "127.0.0.1";
// $username = "root";
// $password = "";
// $database = "FullCycle";
// $port = 3307;

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $database, $port);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

$fullCycleModulesMock = [
    '1' => 'PFA',
    '2' => 'Docker',
    '3' => 'Micro-serviços',
    '4' => 'Mensageria - RabbitMQ',
];

echo "========================================\n";
echo "========== Módulos FullCycle ===========\n";
echo "========================================\n";

// @todo conectar no mySQL e pegar modulos
foreach ($fullCycleModulesMock as $key => $module) {
    echo $key . ':' . $module . "\n";
}