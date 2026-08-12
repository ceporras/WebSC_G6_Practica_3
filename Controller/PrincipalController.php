<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/WebSC_G6_Practica_3/Model/PrincipalModel.php';


// Obtener el saldo 

if (isset($_GET["accion"]) && $_GET["accion"] == "obtenerSaldo") {

    $Id_Compra = $_GET["Id_Compra"];

    $compras = getComprasPendientes();

    $compraEncontrada = null;

    foreach ($compras as $compra) {

        if ($compra["Id_Compra"] == $Id_Compra) {

            $compraEncontrada = $compra;
            break;
        }
    }

    header("Content-Type: application/json");

    echo json_encode($compraEncontrada);

    exit;
}


// Registrar Abono 

if (isset($_POST["btnAbonar"])) {

    $Id_Compra = $_POST["Id_Compra"];
    $SaldoAnterior = $_POST["SaldoAnterior"];
    $Monto = $_POST["Monto"];

    // Validación de campos 


    if (
        empty($Id_Compra) ||
        empty($SaldoAnterior) ||
        empty($Monto)
    ) {
        header(
            "Location: /WebSC_G6_Practica_3/View/Registro.php?error=campos"
        );

        exit;
    }


    $SaldoAnterior = floatval($SaldoAnterior);
    $Monto = floatval($Monto);

    // Validación del monto mayor a 0

    if ($Monto <= 0) {

        header(
            "Location: /WebSC_G6_Practica_3/View/Registro.php?error=monto"
        );

        exit;
    }

    // Validación del abono que no puede superar al saldo

    if ($Monto > $SaldoAnterior) {

        header(
            "Location: /WebSC_G6_Practica_3/View/Registro.php?error=saldo"
        );
        exit;
    }

    // Cálculo del nuevo saldo

    $NuevoSaldo = $SaldoAnterior - $Monto;

    // Determinación del Estado

    if ($NuevoSaldo == 0) {

        $Estado = "Cancelado";
    } else {

        $Estado = "Pendiente";
    }


    // Registro del abono

    $resultadoAbono = AddPagoParcial(
        $Id_Compra,
        $Monto
    );

    // Actualización del estado y del saldo

    $resultadoCompra = UpdateCompra(
        $Id_Compra,
        $NuevoSaldo,
        $Estado

    );

    // Redireecionamiento a la consulta

    if ($resultadoAbono && $resultadoCompra) {

    header(
        "Location: /WebSC_G6_Practica_3/View/Consulta.php"
    );

    exit; 

    }

    header(
        "Location: /WebSC_G6_Practica_3/View/Registro.php?error=registro"
    );

    exit;

}
