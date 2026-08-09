<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/WebSC_G6_Practica_3/Model/UtilModel.php';

//para la pagina de consultas
function getAllCompras()
{
    $conn = OpenDB();

    $sql = "CALL spGetCompras()";
    $response = $conn->query($sql);

    //Se guarda el resultado en una variable nueva
    $datos = [];
    while ($fila = $response->fetch_assoc()) {
        $datos[] = $fila;
    }

    CloseDB($conn);
    return $datos;
}

//para el dropdown del formulario registro
function getComprasPendientes()
{
    $conn = OpenDB();

    $sql = "CALL spGetComprasPendientes()";
    $response = $conn->query($sql);

    //Se guarda el resultado en una variable nueva
    $datos = [];
    while ($fila = $response->fetch_assoc()) {
        $datos[] = $fila;
    }

    CloseDB($conn);
    return $datos;
}

//registrar abono
function AddPagoParcial($Id_Compra, $Monto)
{
    $conn = OpenDB();

    $sql = "CALL spAddAbono('$Id_Compra', '$Monto')";
    $response = $conn->query($sql);

    CloseDB($conn);
    return $response;
}

//para restar el abono del saldo pendiente o actualizar estado a Cancelado 
function UpdateCompra($Id_Compra, $Saldo, $Estado)
{
    $conn = OpenDB();

    $sql = "CALL spUpdateCompra('$Id_Compra', '$Saldo', '$Estado')";
    $response = $conn->query($sql);


    CloseDB($conn);
    return $response;
}
