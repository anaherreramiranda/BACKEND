<?php 

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET'){
$clientes = [[
    "Cedula"=>1009897689,
    "Nombre"=>"Ana Herrera",
    "Dirrecion"=>"kra 15 # 15 -20",
    "Telefono"=>"3694568",
    "Edad"=>30
],[
    "Cedula"=>32876908,
    "Nombre"=>"Doris Miranda",
    "Dirrecion"=>"kra 17 # 28 -40",
    "Telefono"=>"3567890",
    "Edad"=>60
],[
    "Cedula"=>55678908,
    "Nombre"=>"Esther Oliveros",
    "Dirrecion"=>"kra 51 # 15 -32",
    "Telefono"=>"3642901",
    "Edad"=>45
],[
    "Cedula"=>167890987,
    "Nombre"=>"Dailis Vides",
    "Dirrecion"=>"kra 11 # 54 -100",
    "Telefono"=>"3876758",
    "Edad"=>22
]

];
$json= json_encode($clientes);

header('content-type: application/json; charset=utf-8');
echo $json;
}else{

    $clientes = ["messge"=>"Metodo $method no permitido" ];
    $json= json_encode($clientes);

header('content-type: application/json; charset=utf-8');
echo $json;
}
?>