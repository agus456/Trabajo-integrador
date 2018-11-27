

<script type="text/javascript">
	var click=1;
function mostrarcaja(){

	if(click==1){
		var contenedor = document.getElementById("caja");
			contenedor.style.display = "block";
			click=click+1;

		}
	else{var contenedor = document.getElementById("caja");
		contenedor.style.display = "none";
	click=1;}
}
	</script>



<?php
function calcularColor($imagenPublic) {
	if ($imagenPublic=="ofertas.png") {
		$color = "red";
	} elseif ($imagenPublic=="compras.png") {
		$color = "#33cc33";
	} else {
		$color = "#0066ff";
	}

	return $color;
}

$articulo1 = [
	"id" => 1,
	"nombre" => "Coca Cola",
	"descripcion" => "<br>3 Litros Coca Cola",
	"imagen" => "coca-cola-3l.png",
	"imagenPublic"=>"ofertas.png",
	"precio" =>  99.90
];
$articulo1["color"] = calcularColor($articulo1["imagenPublic"]);

$articulo2 = [
	"id" => 2,
	"nombre" => "Papas Fritas",
	"descripcion" => "<br>Lays<br>250 gr",
	"imagen" => "lays-classic.png",
	"imagenPublic"=>"ofertas.png",
	"precio" => 97
];
$articulo2["color"] = calcularColor($articulo2["imagenPublic"]);

$articulo3 = [
	"id" => 3,
	"nombre" => "Protector Solar",
	"descripcion" => "Dermaglos <br>Spray 170 ml<br> FPS 30",
	"imagen" => "dermaglos.png",
	"imagenPublic"=>"ofertas.png",
	"precio" => 495
];
$articulo3["color"] = calcularColor($articulo3["imagenPublic"]);
$articulo4 = [
	"id" => 1,
	"nombre" => "Coca Cola",
	"descripcion" => "<br>3 Litros Coca Cola",
	"imagen" => "coca-cola-3l.png",
	"imagenPublic"=>"compras.png",
	"precio" =>  99.90
];
$articulo4["color"] = calcularColor($articulo4["imagenPublic"]);
$articulo5 = [
	"id" => 2,
	"nombre" => "Papas Fritas",
	"descripcion" => "<br>Lays<br>250 gr",
	"imagen" => "lays-classic.png",
	"imagenPublic"=>"compras.png",
	"precio" => 97
];
$articulo5["color"] = calcularColor($articulo5["imagenPublic"]);
$articulo6 = [
	"id" => 3,
	"nombre" => "Protector Solar",
	"descripcion" => "Dermaglos <br>Spray 170 ml<br> FPS 30",
	"imagen" => "dermaglos.png",
	"imagenPublic"=>"compras.png",
	"precio" => 495
];
$articulo6["color"] = calcularColor($articulo6["imagenPublic"]);
$articulo7 = [
	"id" => 1,
	"nombre" => "Coca Cola",
	"descripcion" => "<br>3 Litros Coca Cola",
	"imagen" => "coca-cola-3l.png",
	"imagenPublic"=>"consultas.png",
	"precio" =>  99.90
];
$articulo7["color"] = calcularColor($articulo7["imagenPublic"]);
$articulo8 = [
	"id" => 2,
	"nombre" => "Papas Fritas",
	"descripcion" => "<br>Lays<br>250 gr",
	"imagen" => "lays-classic.png",
	"imagenPublic"=>"consultas.png",
	"precio" => 97
];
$articulo8["color"] = calcularColor($articulo8["imagenPublic"]);
$articulo9 = [
	"id" => 3,
	"nombre" => "Protector Solar",
	"descripcion" => "Dermaglos <br>Spray 170 ml<br> FPS 30",
	"imagen" => "dermaglos.png",
	"imagenPublic"=>"consultas.png",
	"precio" => 495
];

$articulo9["color"] = calcularColor($articulo9["imagenPublic"]);






$articulos = [
	$articulo1, $articulo2, $articulo3, $articulo4, $articulo5, $articulo6, $articulo7, $articulo8, $articulo9
];







 ?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/styles.css" rel="stylesheet">
		  <link rel="stylesheet" href="ionicons/css/ionicons.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



		<title>Working Group</title>
	</head>
	<header>



	</header>
	<body>
		<div class="nav">

<div class="btn">

	<li><a href="index.php">Inicio</a></li>


</div>
<div class="btn">
	<li><a href="contacto.php">Contacto</a></li>
</div>
<div class="btn registro">
	<li><a href="registro.php" style="margin-top:-10%">Registro</a></li>
</div>
<div class="btn login">
	<li><a href="login.php">Login</a></li>
</div>
</div>


<div class="col1">
	<div class="btn-sel">
	<select name="seleccionar"id="seleccionar">
	 <option value="">Categorias</option>
	<option value="1">Almacén</option>
	<option value="2">Bebidas</option>
	<option value="3">Frescos</option>
	<option value="4">Congelados</option>
	<option value="5">Limpieza</option>
	<option value="6" >Perfumeria</option>
	<option value="7" >Electro</option>
	<option value="8" >Textil</option>
	<option value="9" >Hogar</option>
	<option value="10" >Aire Libre</option>

</select>
</div>
<div class="btn-sel">
<button id="mostrar" onclick="mostrarcaja()">Tu Listado</botton>
</div>
<div class="caja"id="caja" style="display:none">

<p>Aquí se irán agregando los productos seleccionados</p>






	</div>
</div>
  <form class="" action="index2.php" method="POST">
<div class="columnas">

<div class="col2">
<div class="container">

					<?php for ($i = 0; $i < count($articulos); $i++) { ?>

										<div class="card">
											<div class="card-image">
					<img src="images/<?=$articulos[$i]["imagen"]?>">
				</div>
				<div class="card-data">
				<img class="special" src="images/<?=$articulos[$i]["imagenPublic"]?>">
				<br>
			<p><strong><?=$articulos[$i]["nombre"]?> <br><?=$articulos[$i]["descripcion"]?></strong> </p>

			<p style="font-weight:bold;color:<?=$articulos[$i]["color"]?>">
				Precio: <?=$articulos[$i]["precio"]?>
			</p>
<input type="checkbox" value="1" name="<?=$articulos[$i]["nombre"]?>" class="form-check-inline" >


				</div>
			</div>
			<?php } ?>
			<div class="">
				<input type="submit" name="" value="Enviar">
			</div>
</div>
</form>
</body>
</html>
