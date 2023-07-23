<?php
include ("CapaConexcion/Conexcion.php");
if (isset($_POST["BtnRegistrarAlumno"]))
{
   $Nombre=trim($_POST["Nombre"]);
    $Email=trim($_POST["email"]);
    $Contrasena=trim($_POST["password"]);
    $NroDoc=trim($_POST["NroDoc"]);
    $Sql="INSERT INTO alumno (Nombre,Email,Apellido,NroDocumento) VALUES('$Nombre','$Email','$Contrasena','$NroDoc')";
    $result=mysqli_query($Cnx,$Sql);
    if ($result)
    {
        ?>
        <h3 class= "Registrado" > Registrado en forma correcta </h3>
         <?php
    }
}
?>