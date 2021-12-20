<?php

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
foreach ($fullCycleModulesMock as $module) {
    echo $module . "\n";
}