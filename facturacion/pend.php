<?php

include("conexion.php");

$id=$_GET['id'];

$sql="UPDATE factura SET  estadoFactura='Pendiente'WHERE cliente_idCliente='$id'";  
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: facturas.php");
    }
?>
