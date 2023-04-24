<?php
include('conecta.php');
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];

$verifica=mysqli_query($conexion,"select * from usuarios where username='$usuario' and pass='$pass'");
$fila = mysqli_num_rows($verifica);
if($fila>0){
    session_start();
    $_SESSION['cliente']=$usuario;
    header("location: roles.php");
}
else{
    echo '  
    <script>
    alert("no fue posible encontrar su cuenta");
    location.href="login.php";
    </script>
    ';
}


?>