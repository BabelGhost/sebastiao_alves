<?php

$database=[
    "host" => "localhost", 
    "user"=> "root",
    "password"=> "",
    "name"=> "sebastiao_alves",
];

function selectSQL($sql){
    global $database;
    $conection = mysqli_connect($database["host"], $database["user"],$database["password"], $database["name"]);
    $search = mysqli_query($conection, $sql);
    $result = mysqli_fetch_all($search, MYSQLI_ASSOC);
    mysqli_close($conection);
    return $result;
}
function selectSQLsingle($sql){
    global $database;
    $conection = mysqli_connect($database["host"], $database["user"],$database["password"], $database["name"]);
    $search = mysqli_query($conection, $sql);
    $result = mysqli_fetch_assoc($search);
    mysqli_close($conection);
    return $result;
}

function iduSQL($sql){
    global $database;
    $conection = mysqli_connect($database["host"], $database["user"],$database["password"], $database["name"]);
    $search = mysqli_query($conection, $sql);
    mysqli_close($conection);
}


?>