<?php
$nombreDefault =$apellidoDefault=$edadDefault=$domicilioDefault=$emailDefault= "";
$passwordDefault = "Password";
$confirmarDefault = "Confirmar Contraseña";
$colorNombre=$colorApellido=$colorEdad=$colorDomicilio=$colorEmail=$colorPassword=$colorConfirmar="";



if ($_POST) {

  if(strlen($_POST["nombre"])==0||strlen($_POST["nombre"])<5){

  $nombreDefault ="NOMBRE mayor a 5 caracteres";
  $colorNombre="red";}
  else{
  $nombreDefault = $_POST["nombre"];
  $colorNombre="white";}

if(strlen($_POST["apellido"])==0||strlen($_POST["apellido"])<5){
  $apellidoDefault ="APELLIDO mayor a 5 caracteres";
  $colorApellido="red";

  }
  else{$colorApellido="white";
     $apellidoDefault = $_POST["apellido"];}

  if (is_numeric($_POST["edad"]) == false || $_POST["edad"] < 1) {
    $edadDefault ="EDAD numérica";
    $colorEdad="red";
    echo("<br>");
  }else{$colorEdad="white";  $edadDefault = $_POST["edad"];}

  if(strlen($_POST["domicilio"])==0||strlen($_POST["domicilio"])<5){

  $domicilioDefault ="DOMICILIO mayor a 5 caracteres";
  $colorDomicilio="red";}
  else{
  $domicilioDefault = $_POST["domicilio"];
   $colorDomicilio="white";}




if (strlen($_POST["email"]) == 0||filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
  $emailDefault ="FORMATO INVALIDO";
  $colorEmail="red";
  echo("<br>");
}
else{$colorEmail="white";
  $emailDefault = $_POST["email"];}

if(strlen($_POST["password"])==0|| strlen($_POST["password"])<5){

  $passwordDefault ="PASSWORD de mas caracteres";
  $colorPassword="red";
  echo("<br>");
}
else{$colorPassword="white";
    $passwordDefault = "Password";}


if(strlen($_POST["confirmar"])==0){

  $confirmarDefault ="CONFIRMAR es vacío";
  $colorConfirmar="red";
  echo("<br>");
}
else{$colorConfirmar="white";
   $confirmarDefault ="Confirmar Contraseña";}

if($_POST["password"]==$_POST["confirmar"] &&strlen($_POST["password"])>0&&strlen($_POST["confirmar"])>0){
$passwordDefault="Correcto";
$confirmarDefault="Correcto";
}
else{ $passwordDefault="Incorrecto";
$colorPassword="red";
$confirmarDefault="Incorrecto";
$colorConfirmar="red";}




}

?>

 <html>

  <head>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/styles.css" rel="stylesheet">
		  <link rel="stylesheet" href="ionicons/css/ionicons.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Registrate</title>


  </head>

<body>

<div class="registro">

  <div class="formulario">
    <h1 class="mensaje" >Registrate!</h1>

<form class="" action="registro.php" method="post" >


<label for="nombre">Nombre:</label><br>
<input id="nombre" type="text" name="nombre" value="<?=$nombreDefault?>" placeholder="nombre" style="font-weight:bold;background-color:<?=$colorNombre?>"><br>



  <label for="apellido">Apellido:</label><br>
  <input id="apellido" type="text" name="apellido" value="<?=$apellidoDefault?>" placeholder="apellido" style="font-weight:bold;background-color:<?=$colorApellido?>"><br><br>

 <label for="edad">Edad:</label><br>
 <input id="edad" type="text" name="edad" value="<?=$edadDefault?>" placeholder="edad" style="font-weight:bold;background-color:<?=$colorEdad?>"><br><br>

 <label for="domicilio">Domicilio:</label><br>
 <input id="domicilio" type="text" name="domicilio" value="<?=$domicilioDefault?>" placeholder="Domicilio" style="font-weight:bold;background-color:<?=$colorDomicilio?>"><br><br>

  <label for="email">Email:</label><br>
<input id="email" type="email" name="email" value="<?=$emailDefault?>" placeholder="Email" style="font-weight:bold;background-color:<?=$colorEmail?>"><br><br>

 <label for="pass">Contraseña:</label><br>
 <input id="pass" type="password" name="password" value="" placeholder="<?=$passwordDefault?>" style="font-weight:bold;background-color:<?=$colorPassword?>"><br><br>
 <label for="passdos">Confirmar Contraseña:</label><br>
 <input id="passdos" type="password" name="confirmar" value="" placeholder="<?=$confirmarDefault?>" style="font-weight:bold;background-color:<?=$colorConfirmar?>"><br><br>


	<button id="enviar-registro" class="btn btn-secondary col-sm" type="submit"> Enviar </button><br><br>

</form>

</div>
</div>
</body>

</html>
