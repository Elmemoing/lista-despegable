incluir db.php al formulario


<?php
include 'db.php';
$conexiondb = conectardb();
$query = "SELECT * FROM cocinero ORDER BY nombre_cocinero ASC";
$resultado = mysqli_query($conexiondb, $query);
mysqli_close($conexiondb);
?>

pedir informacion
        <div class="">
            <th><b><label for="">Cocinero:</label></b></th>
            <th>
                <select name="id_cocinero" class="" id="inputGroupSelect01">
                    <?php
                    while ($cocinero = mysqli_fetch_assoc($resultado)) {
                        echo "<option value='" . $cocinero['nombre_cocinero'] . "'>" . $cocinero['nombre_cocinero'] . "</option>";
                    }
                    ?>
                </select>
            </th>
        </div>
