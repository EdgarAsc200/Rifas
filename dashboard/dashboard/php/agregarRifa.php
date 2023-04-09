<?php
$servername = "162.241.61.215";
$database = "pointsof_Krisapaxvls";
$username = "pointsof_Ticketagp";
$password = "EwyO%*p1492JXnkMgT8RX1";
$form = $_POST;
$name  = $form['nombre'];
$desc = $form['descripcion'];
$num = $form['numero'];
$fech_ini = $form['inicio'];
$fech_fin = $form['final'];
$mensaje = $form['mensaje'];
$img1 = $form['imagen1'];
// Create connection
  $conn = new PDO("mysql:host=$servername; dbname=$database", $username, $password);
  $conn->exec("SET CHARACTER SET utf8");      // Sets encoding UTF-8
  echo $fech_fin;
$extensiones = array(0=>'image/jpg',1=>'image/jpeg',2=>'image/png');
$max_tamanyo = 1024 * 1024 * 8;
try {
}catch(Exception $e){
echo $e;
}
echo $_FILES['imagen1']['size'];
//$sql = "CALL nueva_rifa('{$name}','{$desc}',{$num}, '{$fech_ini}', '{$fech_fin}', '{$mensaje}', 'asd', 'asdf', 'asd', 'asdf', 'asdf');";
//$stmt = $conn->prepare($sql);
//$stmt->execute();

//echo $sql;





mysqli_close($conn);
?>