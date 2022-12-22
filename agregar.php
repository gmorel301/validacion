<?php include_once("conexion.php");

    $imei 	= $_POST['txtimei'];
    $nombre 	= $_POST['txtnombre'];
    $unlocked 	= $_POST['txtunlocked'];

    
    // $resultado = mysqli_query($conn, "INSERT INTO usuarios(ime,nom,unlo) VALUES('$imei','$nombre','$unlocked')");
    // echo '$resultado';

$resultado = null;
$result = null;
$message = null;

try {
    if($resultado = $conn->query("INSERT INTO usuarios(ime,nom,unlo) VALUES('$imei','$nombre','$unlocked')"))
    {
        $result = true;
        $message = "Registro insertado exitosamente";

        header("Location:index.php?result=$result&message=$message"); 
        // echo "$resultado";
    } 

} catch(Exception) {
    $result = false;
    $message = "Hubo un error en los datos registrados, revise que todo esté correcto";

    header("Location:index.php?result=$result&message=$message"); 
}

    // header("Location:index.php"); 

?>