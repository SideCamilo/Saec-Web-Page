<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['correo']))  {
  
  //Email information
  $admin_email = "sergiocamiloe@gmail.com";
  $email = $_REQUEST['correo'];
  $subject = "Correo desde SAEC.MX";
  $comment = $_REQUEST['texto'];
  $tel = $_REQUEST['telefono'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Gracias por su participación con nosotros";
  }
  
  //if "email" variable is not filled out, display the form
  else  {}
?>