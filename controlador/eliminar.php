<?php 
if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("delete from pan where idmos=  $id");
   if($sql==1){
    echo '<div></div>';
   }else{
    echo '<div></div>';

   }
}
?>