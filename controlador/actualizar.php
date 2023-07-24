<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombreProducto"]) and !empty($_POST["descripcion"]) and !empty($_POST["precio"]) and !empty($_POST["cantidadStock"])) {
        $id = $_GET["id"];
        $nom = $_POST["nombreProducto"];
        $des = $_POST["descripcion"];
        $precio = $_POST["precio"];
        $cant = $_POST["cantidadStock"];
        $sql = $conexion->query("UPDATE pan SET nombremos='$nom', descrimos='$des', preciomos='$precio', disponiblemos='$cant' WHERE idmos=$id");
         if ($sql) {
            header("location:index.php");
         } else {
            echo "<div class='alert alert-warning'></div>";
         }
    } else {
        echo 'campos vacios';
    }
}
?>
