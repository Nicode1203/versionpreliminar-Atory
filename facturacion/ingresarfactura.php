<?php 
include "conexion.php";
$cid=$_POST['cid'];
$ffact=$_POST['ffact'];
$impt=$_POST['impt'];
$sub=$_POST['sub'];
$st=$_POST['st'];

$sql="INSERT INTO factura(fechaFactura,impuestoTotal,subTotal,valorTotalFactura,empresa_idEmpresa,cliente_idCliente)
VALUES('$ffact','$impt','$sub','$st','1','$cid'); ";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: facturas.php");
}


?>