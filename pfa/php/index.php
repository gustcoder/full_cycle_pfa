<?php

$servername = "mysql57";
$username = "fullcycle";
$password = "fullcycle";
$database = "FullCycle";
$port = 3306;

//Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlGetFullCycleModules = '
    select
        id,
        name
    from
        modules
    order by 
        id;
';

echo "========================================";
echo "========== Módulos FullCycle ===========";
echo "========================================";

echo "<br>";

if ($result = $conn->query($sqlGetFullCycleModules)) {
    while($module = $result->fetch_object()){
        echo $module->id . ': ' . utf8_encode($module->name) . "<br>";
    }
}
$result->close();
unset($module);
unset($sqlGetFullCycleModules);