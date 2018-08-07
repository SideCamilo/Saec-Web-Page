<?php

$hostname_landier = "localhost";
$database_landier = "landierm_landierdb";
$username_landier = "landierm_read";
$password_landier = "TgT-mex-bPL-pV2"; 


require_once('class.upload.php');


$files = array($_FILES['imagen_1'],$_FILES['imagen_1a'],$_FILES['imagen_2'],$_FILES['imagen_3'],$_FILES['imagen_4'],$_FILES['imagen_5'],$_FILES['imagen_6'],$_FILES['imagen_7'],$_FILES['imagen_8'],$_FILES['imagen_9'],$_FILES['imagen_10'],$_FILES['imagen_11'],$_FILES['imagen_12'],$_FILES['imagen_13'],$_FILES['imagen_14'],$_FILES['imagen_15']);
	foreach ($files as $file) {
  $handle = new Upload($file);
  if ($handle->uploaded) {
    $handle->Process("../../img/prop/");
    if ($handle->processed) {
     // echo 'OK';
    } else {
     // echo 'Error: ' . $handle->error;
    }
  } else {
   // echo 'Error: ' . $handle->error;
  }
  unset($handle);
}

$landier = mysqli_connect("127.0.0.1",$username_landier,$password_landier,$database_landier);
mysqli_set_charset($landier,"utf8");

if($_POST['imagen_1']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen = '".$_POST['imagen']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;
	$idi=mysqli_insert_id($landier);
}
if($_POST['desc'] != ""){
	$query_usuarios = "UPDATE propiedades SET descripcion = '".$_POST['desc']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['edo'] != "0"){
	$query_usuarios = "UPDATE propiedades SET estado = '".$_POST['edo']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['col'] != ""){
	$query_usuarios = "UPDATE propiedades SET colonia = '".$_POST['col']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['ciudad'] != ""){
	$query_usuarios = "UPDATE propiedades SET ciudad = '".$_POST['ciudad']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['zona'] != "0"){
	$query_usuarios = "UPDATE propiedades SET zona = '".$_POST['zona']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['plantas'] != ""){
	$query_usuarios = "UPDATE propiedades SET plantas = '".$_POST['plantas']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['recamaras'] != ""){
	$query_usuarios = "UPDATE propiedades SET recamaras = '".$_POST['recamaras']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['banos'] != ""){
	$query_usuarios = "UPDATE propiedades SET banos = '".$_POST['banos']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['medbanos'] != ""){
	$query_usuarios = "UPDATE propiedades SET medbanos = '".$_POST['medbanos']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['valor_venta'] != ""){
	$query_usuarios = "UPDATE propiedades SET valor_venta = '".$_POST['valor_venta']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['terreno'] != ""){
	$query_usuarios = "UPDATE propiedades SET terreno = '".$_POST['terreno']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['construccion'] != ""){
	$query_usuarios = "UPDATE propiedades SET construccion = '".$_POST['construccion']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['imagen_1a']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen1 = '".$_POST['imagen1']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;
	$idi=mysqli_insert_id($landier);
}
if($_POST['imagen_2']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen2 = '".$_POST['imagen2']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['imagen_3']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen3 = '".$_POST['imagen3']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['imagen_4']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen4 = '".$_POST['imagen4']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;
	$idi=mysqli_insert_id($landier);	
}
if($_POST['imagen_5']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen5 = '".$_POST['imagen5']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['imagen_6']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen6 = '".$_POST['imagen6']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['imagen_7']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen7 = '".$_POST['imagen7']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['imagen_8']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen8 = '".$_POST['imagen8']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['imagen_9']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen9 = '".$_POST['imagen9']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;
	$idi=mysqli_insert_id($landier);
}
if($_POST['imagen_10']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen10 = '".$_POST['imagen10']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;
	$idi=mysqli_insert_id($landier);	
}
if($_POST['imagen_11']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen11 = '".$_POST['imagen11']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;
	$idi=mysqli_insert_id($landier);
}
if($_POST['imagen_12']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen12 = '".$_POST['imagen12']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;
	$idi=mysqli_insert_id($landier);
}
if($_POST['imagen_13']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen13 = '".$_POST['imagen13']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['imagen_14']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen14 = '".$_POST['imagen14']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['imagen_15']['name'] != ""){
	$query_usuarios = "UPDATE propiedades SET imagen15 = '".$_POST['imagen15']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}
if($_POST['publica'] != ""){
	$query_usuarios = "UPDATE propiedades SET publica = '".$_POST['publica']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;
	$idi=mysqli_insert_id($landier);
}
if($_POST['tel'] != ""){
	$query_usuarios = "UPDATE propiedades SET telefono = '".$_POST['tel']."' WHERE codigo = '".$_POST['cod']."'";
	$usuariorecord = mysqli_query($landier, $query_usuarios) ;	
	$idi=mysqli_insert_id($landier);
}

$go = "../final.html";
header(sprintf("Location: %s", $go));

?>