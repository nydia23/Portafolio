<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Evidencias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css">
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto; /* Añadido para centrar la tabla en la página */
        }

        th {
            text-align: center;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #88b1f7;
        }

        td {
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #4585f5;
        }
    </style>
    <div>
        <font face="impact">
            <svg width="1500" height="300">

                <rect fill="#2E5EA4" x="0" y="0" width="1500" height="150"></rect>
                <text x="750" y="35" fill="white" font-size="45" text-anchor="middle" alignment-baseline="middle">
                    BUAP
                </text>
                <text x="750" y="100" fill="white" font-size="45" text-anchor="middle" alignment-baseline="middle">
                    Portafolio de trabajo
                </text>
            </svg>
        </font>
    </div>
</head>

<body>
    <?php
        include 'conexion.php';

        // Realizar la consulta
        $sql = "SELECT nombre, apellidos, matricula FROM integrantes_equipo";
        $result = $conn->query($sql);

        // Mostrar los resultados
        if ($result->num_rows > 0) {
            echo "<table border='1px'>
                    <thead>
                        <tr>
                            <th colspan='3'>Integrantes de Equipo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Matricula</th>
                        </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["nombre"] . "</td>
                        <td>" . $row["apellidos"] . "</td>
                        <td>" . $row["matricula"] . "</td>
                    </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<p>No se encontraron integrantes de equipo.</p>";
        }

        // Cerrar la conexión
        $conn->close();
    ?>
    <h2>Portafolio de Evidencias</h2>
    Nombre de tarea: <input type="text"/> <br/><br/>
    <form action="procesar_formulario.php" method="post" enctype="multipart/form-data">
    <label for="archivo">Adjuntar PDF:</label>
    <input type="file" name="archivo" id="archivo" accept=".pdf" required>
    <button type="submit">Subir Archivo</button>
</form>


    
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Imagenes/imagen 1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Imagenes/imagen 2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Imagenes/imagen 3.jpg" class="d-block w-100" alt="...">
          </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

  

    <script></script>
</body>

</html>
