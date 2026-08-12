<?php

include_once $_SERVER['DOCUMENT_ROOT']
    . '/WebSC_G6_Practica_3/Controller/PrincipalController.php';

$compras = getComprasPendientes();

?>

<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Registrar Abono | Abonix</title>

    <link
        rel="stylesheet"
        href="/WebSC_G6_Practica_3/View/assets/css/estilos.css"
    >


    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js">
    </script>


</head>


<body>


<?php

include_once $_SERVER['DOCUMENT_ROOT']
    . '/WebSC_G6_Practica_3/View/layout/header.php';

?>


<main class="main">


    <section class="funcionalidades">


        <div class="funcionalidades-contenedor">


            <div class="seccion-encabezado">


                <p class="seccion-mini-titulo">
                    Pago parcial
                </p>


                <h2>
                    Registrar un abono
                </h2>


                <p>
                    Seleccione una compra pendiente e ingrese
                    el monto que desea abonar.
                </p>


            </div>


            <div
                class="panel-principal"
                style="
                    max-width: 650px;
                    margin: 0 auto;
                "
            >


                <?php

                if (isset($_GET["error"])) {

                    ?>

                    <div
                        style="
                            background-color: #fef2f2;
                            color: #b91c1c;
                            border: 1px solid #fecaca;
                            border-radius: 10px;
                            padding: 13px 15px;
                            margin-bottom: 20px;
                            font-size: 13px;
                        "
                    >


                        <?php

                        if ($_GET["error"] == "saldo") {

                            echo "El abono no puede ser mayor al saldo anterior.";

                        } elseif ($_GET["error"] == "campos") {

                            echo "Todos los campos son requeridos.";

                        } elseif ($_GET["error"] == "monto") {

                            echo "El monto debe ser mayor a cero.";

                        } else {

                            echo "Ocurrió un error al registrar el abono.";
                        }

                        ?>


                    </div>


                    <?php

                }

                ?>


                <form
                    id="formAbono"
                    action="/WebSC_G6_Practica_3/Controller/PrincipalController.php"
                    method="POST"
                >


                    <!-- COMPRA -->

                    <div class="dato" style="margin-bottom: 18px;">


                        <label
                            for="Id_Compra"
                            style="
                                display: block;
                                margin-bottom: 8px;
                                color: #334155;
                                font-size: 14px;
                                font-weight: 600;
                            "
                        >

                            Compra

                        </label>


                        <select
                            name="Id_Compra"
                            id="Id_Compra"
                            required
                            style="
                                width: 100%;
                                height: 48px;
                                padding: 0 14px;
                                border: 1px solid #dbe2ea;
                                border-radius: 10px;
                                background-color: white;
                                color: #334155;
                                font-family: inherit;
                                font-size: 14px;
                                outline: none;
                            "
                        >


                            <option value="">
                                Seleccione una compra
                            </option>


                            <?php

                            foreach ($compras as $compra) {

                            ?>


                                <option
                                    value="<?php echo $compra["Id_Compra"]; ?>"
                                >

                                    <?php

                                    echo $compra["Descripcion"]
                                        . " - Compra #"
                                        . $compra["Id_Compra"];

                                    ?>

                                </option>


                            <?php

                            }

                            ?>


                        </select>


                    </div>



                    <!-- SALDO ANTERIOR -->


                    <div class="dato" style="margin-bottom: 18px;">


                        <label
                            for="SaldoAnterior"
                            style="
                                display: block;
                                margin-bottom: 8px;
                                color: #334155;
                                font-size: 14px;
                                font-weight: 600;
                            "
                        >

                            Saldo Anterior

                        </label>


                        <input
                            type="number"
                            id="SaldoAnterior"
                            name="SaldoAnterior"
                            step="0.01"
                            readonly
                            style="
                                width: 100%;
                                height: 48px;
                                padding: 0 14px;
                                border: 1px solid #dbe2ea;
                                border-radius: 10px;
                                background-color: #f1f5f9;
                                color: #475569;
                                font-family: inherit;
                                font-size: 14px;
                                outline: none;
                            "
                        >


                    </div>



                    <!-- ABONO -->


                    <div class="dato">


                        <label
                            for="Monto"
                            style="
                                display: block;
                                margin-bottom: 8px;
                                color: #334155;
                                font-size: 14px;
                                font-weight: 600;
                            "
                        >

                            Abono

                        </label>


                        <input
                            type="number"
                            id="Monto"
                            name="Monto"
                            step="0.01"
                            min="0.01"
                            placeholder="Ingrese el monto del abono"
                            required
                            style="
                                width: 100%;
                                height: 48px;
                                padding: 0 14px;
                                border: 1px solid #dbe2ea;
                                border-radius: 10px;
                                background-color: white;
                                color: #334155;
                                font-family: inherit;
                                font-size: 14px;
                                outline: none;
                            "
                        >


                        <small
                            id="mensajeSaldo"
                            style="
                                display: none;
                                color: #dc2626;
                                font-size: 12px;
                                margin-top: 8px;
                            "
                        >

                            El abono no puede ser mayor al saldo anterior.

                        </small>


                    </div>



                    <!-- BOTONES -->


                    <div
                        class="hero-botones"
                        style="margin-top: 25px;"
                    >


                        <button
                            type="submit"
                            name="btnAbonar"
                            class="btn btn-principal"
                        >

                            Abonar

                        </button>


                        <a
                            href="/WebSC_G6_Practica_3/View/Consulta.php"
                            class="btn btn-secundario"
                        >

                            Cancelar

                        </a>


                    </div>


                </form>


            </div>


        </div>


    </section>


</main>


<?php

include_once $_SERVER['DOCUMENT_ROOT']
    . '/WebSC_G6_Practica_3/View/layout/footer.php';

?>


<script>


// ======================================================
// OBTENER SALDO CON AJAX
// ======================================================

$("#Id_Compra").change(function () {


    let Id_Compra = $(this).val();


    if (Id_Compra === "") {

        $("#SaldoAnterior").val("");

        $("#Monto").val("");

        return;
    }


    $.ajax({


        url:
            "/WebSC_G6_Practica_3/Controller/PrincipalController.php",


        type: "GET",


        data: {

            accion: "obtenerSaldo",

            Id_Compra: Id_Compra

        },


        success: function (response) {


            if (response !== null) {


                $("#SaldoAnterior").val(
                    response.Saldo
                );


                $("#Monto").attr(
                    "max",
                    response.Saldo
                );


                $("#Monto").val("");

                $("#mensajeSaldo").hide();


            }


        },


        error: function () {


            alert(
                "Ocurrió un error al consultar el saldo."
            );


        }


    });


});



// ======================================================
// VALIDAR MONTO
// ======================================================

$("#Monto").on("input", function () {


    let saldo = parseFloat(
        $("#SaldoAnterior").val()
    );


    let monto = parseFloat(
        $("#Monto").val()
    );


    if (monto > saldo) {


        $("#mensajeSaldo").show();


    } else {


        $("#mensajeSaldo").hide();


    }


});



// ======================================================
// VALIDAR ANTES DEL SUBMIT
// ======================================================

$("#formAbono").submit(function (event) {


    let saldo = parseFloat(
        $("#SaldoAnterior").val()
    );


    let monto = parseFloat(
        $("#Monto").val()
    );


    if (monto > saldo) {


        event.preventDefault();

        $("#mensajeSaldo").show();

        return false;


    }


});


</script>


</body>

</html>
