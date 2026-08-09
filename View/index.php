<?php

include_once $_SERVER['DOCUMENT_ROOT']
    . '/WebSC_G6_Practica_3/Controller/PrincipalController.php';

?>

<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Abonix | Gestión de Compras y Abonos</title>

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


    <!-- =====================================
         HERO PRINCIPAL
    ====================================== -->

    <section class="hero">


        <div class="hero-texto-contenedor">


            <div class="hero-etiqueta">

                <span class="hero-etiqueta-punto"></span>

                Gestión simple y segura

            </div>


            <h1>

                Mantén tus compras y
                <span>pagos bajo control.</span>

            </h1>


            <p class="hero-texto">

                Consulta fácilmente el estado de tus compras,
                revisa tus saldos pendientes y registra pagos
                parciales desde un mismo lugar.

            </p>


            <div class="hero-botones">

                <a
                    href="/WebSC_G6_Practica_3/View/Consulta.php"
                    class="btn btn-principal"
                >

                    Consultar compras

                </a>


                <a
                    href="/WebSC_G6_Practica_3/View/Registro.php"
                    class="btn btn-secundario"
                >

                    Registrar un abono

                </a>

            </div>


        </div>



        <!-- PANEL VISUAL -->

        <div class="hero-panel">


            <div class="panel-principal">


                <div class="panel-header">

                    <h3>Resumen de compra</h3>

                    <span class="panel-estado">
                        Pendiente
                    </span>

                </div>


                <div class="saldo-card">

                    <p class="saldo-titulo">
                        Saldo pendiente
                    </p>

                    <p class="saldo-monto">
                        ₡125,000
                    </p>

                    <p class="saldo-descripcion">
                        Compra #0001
                    </p>

                </div>


                <div class="panel-datos">


                    <div class="dato">

                        <span>Estado</span>

                        <strong>
                            Pago pendiente
                        </strong>

                    </div>


                    <div class="dato">

                        <span>Último abono</span>

                        <strong>
                            ₡25,000
                        </strong>

                    </div>


                    <div class="dato">

                        <span>Compra</span>

                        <strong>
                            #0001
                        </strong>

                    </div>


                    <div class="dato">

                        <span>Moneda</span>

                        <strong>
                            CRC
                        </strong>

                    </div>


                </div>


            </div>


        </div>


    </section>



    <!-- =====================================
         FUNCIONALIDADES
    ====================================== -->

    <section class="funcionalidades">


        <div class="funcionalidades-contenedor">


            <div class="seccion-encabezado">

                <p class="seccion-mini-titulo">
                    Funcionalidades
                </p>

                <h2>
                    Todo lo que necesitas en un solo lugar
                </h2>

                <p>

                    El sistema está diseñado para facilitar el
                    seguimiento de compras y el registro de pagos
                    parciales de una manera rápida y sencilla.

                </p>

            </div>



            <div class="tarjetas">


                <!-- CONSULTA -->

                <article class="tarjeta">


                    <div class="tarjeta-icono">
                        ↗
                    </div>


                    <h3>
                        Consulta de compras
                    </h3>


                    <p>

                        Visualiza todas las compras registradas,
                        consulta sus saldos y conoce cuáles continúan
                        pendientes o ya fueron canceladas.

                    </p>


                    <a
                        href="/WebSC_G6_Practica_3/View/Consulta.php"
                        class="tarjeta-enlace"
                    >

                        Ver todas las compras

                        <span>→</span>

                    </a>


                </article>



                <!-- ABONO -->

                <article class="tarjeta">


                    <div class="tarjeta-icono">
                        $
                    </div>


                    <h3>
                        Registrar un abono
                    </h3>


                    <p>

                        Selecciona una compra pendiente y realiza
                        un pago parcial. El saldo se actualizará
                        automáticamente.

                    </p>


                    <a
                        href="/WebSC_G6_Practica_3/View/Registro.php"
                        class="tarjeta-enlace"
                    >

                        Realizar un abono

                        <span>→</span>

                    </a>


                </article>


            </div>


        </div>


    </section>



    <!-- =====================================
         CÓMO FUNCIONA
    ====================================== -->

    <section class="informacion">


        <div class="informacion-contenedor">


            <div class="informacion-texto">


                <p class="seccion-mini-titulo">
                    Proceso sencillo
                </p>


                <h2>
                    Gestionar tus pagos no tiene que ser complicado
                </h2>


                <p>

                    Abonix concentra la información necesaria para
                    consultar el estado de las compras y registrar
                    pagos parciales sin procesos innecesarios.

                </p>


            </div>



            <div class="pasos">


                <div class="paso">

                    <div class="paso-numero">
                        1
                    </div>

                    <div class="paso-texto">

                        <strong>
                            Consulta tus compras
                        </strong>

                        <span>
                            Revisa las compras registradas y su estado.
                        </span>

                    </div>

                </div>



                <div class="paso">

                    <div class="paso-numero">
                        2
                    </div>

                    <div class="paso-texto">

                        <strong>
                            Selecciona una compra pendiente
                        </strong>

                        <span>
                            El sistema mostrará automáticamente su saldo.
                        </span>

                    </div>

                </div>



                <div class="paso">

                    <div class="paso-numero">
                        3
                    </div>

                    <div class="paso-texto">

                        <strong>
                            Registra el abono
                        </strong>

                        <span>
                            El nuevo saldo y estado se actualizarán.
                        </span>

                    </div>

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