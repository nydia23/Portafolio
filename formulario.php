<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si se seleccionó un archivo y errorres
    if (isset($_FILES["archivo"]) && $_FILES["archivo"]["error"] == UPLOAD_ERR_OK) {
        $nombre_temporal = $_FILES["archivo"]["tmp_name"];
        $nombre_archivo = "archivos/" . basename($_FILES["archivo"]["name"]);
        $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));

        // Verifica si el archivo es un PDF
        if ($extension == "pdf") {
            // Mueve el archivo a la carpeta "archivos"
            if (move_uploaded_file($nombre_temporal, $nombre_archivo)) {
                echo "El archivo se ha subido correctamente.";
            } else {
                echo "Error al subir el archivo.";
            }
        } else {
            echo "Por favor, sube un archivo PDF.";
        }
    } else {
        echo "Error al subir el archivo.";
    }
}
?>
