<?php
if(!empty($_POST["btnregistrar"])){
if(!empty($_POST["nombreProducto"]) and !empty($_POST["descripcion"]) and !empty($_POST["precio"]) and !empty($_POST["cantidadStock"])){

    $Nom=$_POST["nombreProducto"];
   $Des=$_POST["descripcion"];
   $Prec=$_POST["precio"];
   $Cant=$_POST["cantidadStock"];

   $sql=$conexion->query("insert into pan(nombremos,descrimos,preciomos,disponiblemos)values (' $Nom','$Des',' $Prec','$Cant') ");
    if($sql==1){

        echo '<div class="alert alert-succes"></div>';
    }else{
        echo '<div class="alert alert-danger"></div>';

    }

}else{
    echo"algunos de los campos esta vacio";
}

}
?>