<?php
include('conecta.php');
session_start();

$sesion=$_SESSION['cliente'];
$data=mysqli_query($conexion,"select * from usuarios u, roles r where username='$sesion' and u.rol_id=r.id");

while($consulta=mysqli_fetch_array($data)){
    $rol=$consulta['rol'];


}
if($rol=="admin"){
include("admin/admin.php");
}elseif($rol=="estudiante"){
 include("estudiante/estudiante.php");
}


?>