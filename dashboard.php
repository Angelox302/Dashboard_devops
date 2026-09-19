<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="dashboard">

    <?php include 'includes/sidebar.php'; ?>

    <main class="contenido">

        <h1>Dashboard</h1>
        <p>Bienvenido al panel del restaurante</p>

        <div class="estadisticas">

            <div class="tarjeta">
                <h3>Pedidos</h3>
                <p>25</p>
            </div>

            <div class="tarjeta">
                <h3>Reservas</h3>
                <p>10</p>
            </div>

            <div class="tarjeta">
                <h3>Clientes</h3>
                <p>50</p>
            </div>

        </div>

        <div class="pedidos">

            <h2>Pedidos recientes</h2>

            <table>

                <tr>
                    <th>Cliente</th>
                    <th>Pedido</th>
                    <th>Estado</th>
                </tr>

                <tr>
                    <td>Juan</td>
                    <td>Hamburguesa</td>
                    <td>Preparando</td>
                </tr>

                <tr>
                    <td>Maria</td>
                    <td>Pizza</td>
                    <td>Entregado</td>
                </tr>

                <tr>
                    <td>Carlos</td>
                    <td>Pasta</td>
                    <td>Pendiente</td>
                </tr>

            </table>

        </div>

    </main>

</div>

</body>
</html>