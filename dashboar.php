<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Restaurante</title>

    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>

    <div class="dashboard">

        <aside class="sidebar">
            <h2>Mi Restaurante</h2>

            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Pedidos</a></li>
                <li><a href="#">Reservas</a></li>
                <li><a href="#">Menú</a></li>
                <li><a href="#">Clientes</a></li>
            </ul>
        </aside>


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