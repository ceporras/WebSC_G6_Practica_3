<?php

include_once $_SERVER['DOCUMENT_ROOT']
    . '/WebSC_G6_Practica_3/Controller/PrincipalController.php';

$compras = getAllCompras();

?>

<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Consulta de Compras | Abonix</title>

    <link
        rel="stylesheet"
        href="/WebSC_G6_Practica_3/View/assets/css/estilos.css"
    >

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
                    Compras
                </p>

                <h2>
                    Consulta de compras
                </h2>

                <p>
                    Consulte el estado, precio y saldo actual
                    de todas las compras registradas.
                </p>

            </div>


            <div class="panel-principal">


                <div style="overflow-x: auto;">


                    <table
                        style="
                            width: 100%;
                            border-collapse: collapse;
                            font-size: 14px;
                        "
                    >


                        <thead>

                            <tr
                                style="
                                    background-color: #f8fafc;
                                    color: #64748b;
                                "
                            >

                                <th
                                    style="
                                        text-align: left;
                                        padding: 16px;
                                        border-bottom: 1px solid #e5eaf0;
                                    "
                                >
                                    Compra
                                </th>


                                <th
                                    style="
                                        text-align: left;
                                        padding: 16px;
                                        border-bottom: 1px solid #e5eaf0;
                                    "
                                >
                                    Descripción
                                </th>


                                <th
                                    style="
                                        text-align: left;
                                        padding: 16px;
                                        border-bottom: 1px solid #e5eaf0;
                                    "
                                >
                                    Precio
                                </th>


                                <th
                                    style="
                                        text-align: left;
                                        padding: 16px;
                                        border-bottom: 1px solid #e5eaf0;
                                    "
                                >
                                    Saldo
                                </th>


                                <th
                                    style="
                                        text-align: left;
                                        padding: 16px;
                                        border-bottom: 1px solid #e5eaf0;
                                    "
                                >
                                    Estado
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                        <?php

                        foreach ($compras as $compra) {

                        ?>


                            <tr>


                                <td
                                    style="
                                        padding: 18px 16px;
                                        border-bottom: 1px solid #eef2f6;
                                        color: #2563eb;
                                        font-weight: 600;
                                    "
                                >

                                    #<?php echo $compra["Id_Compra"]; ?>

                                </td>


                                <td
                                    style="
                                        padding: 18px 16px;
                                        border-bottom: 1px solid #eef2f6;
                                    "
                                >

                                    <?php echo $compra["Descripcion"]; ?>

                                </td>


                                <td
                                    style="
                                        padding: 18px 16px;
                                        border-bottom: 1px solid #eef2f6;
                                    "
                                >

                                    ₡<?php

                                    echo number_format(
                                        $compra["Precio"],
                                        2,
                                        ",",
                                        "."
                                    );

                                    ?>

                                </td>


                                <td
                                    style="
                                        padding: 18px 16px;
                                        border-bottom: 1px solid #eef2f6;
                                    "
                                >

                                    ₡<?php

                                    echo number_format(
                                        $compra["Saldo"],
                                        2,
                                        ",",
                                        "."
                                    );

                                    ?>

                                </td>


                                <td
                                    style="
                                        padding: 18px 16px;
                                        border-bottom: 1px solid #eef2f6;
                                    "
                                >


                                    <?php

                                    if ($compra["Estado"] == "Cancelado") {

                                    ?>

                                        <span
                                            style="
                                                display: inline-block;
                                                background-color: #ecfdf5;
                                                color: #059669;
                                                padding: 6px 12px;
                                                border-radius: 20px;
                                                font-size: 12px;
                                                font-weight: 600;
                                            "
                                        >

                                            Cancelado

                                        </span>


                                    <?php

                                    } else {

                                    ?>


                                        <span
                                            style="
                                                display: inline-block;
                                                background-color: #fff7ed;
                                                color: #ea580c;
                                                padding: 6px 12px;
                                                border-radius: 20px;
                                                font-size: 12px;
                                                font-weight: 600;
                                            "
                                        >

                                            Pendiente

                                        </span>


                                    <?php

                                    }

                                    ?>


                                </td>


                            </tr>


                        <?php

                        }

                        ?>


                        </tbody>


                    </table>


                </div>


            </div>


        </div>


    </section>


</main>


<?php

include_once $_SERVER['DOCUMENT_ROOT']
    . '/WebSC_G6_Practica_3/View/layout/footer.php';

?>


</body>

</html>