

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
	"id" => 4,
	"nombre" => "Coca Cola",
	"descripcion" => "<br>3 Litros Coca Cola",
	"imagen" => "coca-cola-3l.png",
	"imagenPublic"=>"compras.png",
	"precio" =>  99.90
];
$articulo4["color"] = calcularColor($articulo4["imagenPublic"]);
$articulo5 = [
	"id" => 5,
	"nombre" => "Papas Fritas",
	"descripcion" => "<br>Lays<br>250 gr",
	"imagen" => "lays-classic.png",
	"imagenPublic"=>"compras.png",
	"precio" => 97
];
$articulo5["color"] = calcularColor($articulo5["imagenPublic"]);
$articulo6 = [
	"id" => 6,
	"nombre" => "Protector Solar",
	"descripcion" => "Dermaglos <br>Spray 170 ml<br> FPS 30",
	"imagen" => "dermaglos.png",
	"imagenPublic"=>"compras.png",
	"precio" => 495
];
$articulo6["color"] = calcularColor($articulo6["imagenPublic"]);
$articulo7 = [
	"id" => 7,
	"nombre" => "Coca Cola",
	"descripcion" => "<br>3 Litros Coca Cola",
	"imagen" => "coca-cola-3l.png",
	"imagenPublic"=>"consultas.png",
	"precio" =>  99.90
];

$articulo7["color"] = calcularColor($articulo7["imagenPublic"]);






$articulos = [
	$articulo1, $articulo2, $articulo3, $articulo4, $articulo5, $articulo6, $articulo7
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
<div class="botones">
<div class="boton"><select name="seleccionar"id="seleccionar" style="margin-left:10%;margin:0;width:100%;border:solid;border:white">
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

</select></div>

<div class="boton"style="padding-left:3%;padding-top: 0.5%" ><a href="index2.php">Nuevo</a></div>
<div class="boton"style="padding-left:3%;padding-top: 0.5%" ><a href="login.php">Salir</a></div>





</header>
	<body>

  <form class="" action="index2.php" method="POST">
<div class="columnas">


<div class="container">

					<?php for ($i = 0; $i < count($articulos); $i++) { ?>

										<div class="card">
											<div class="card-image">
					<img src="images/<?=$articulos[$i]["imagen"]?>">
				</div>
				<div class="card-data">
				<img class="special" src="images/<?=$articulos[$i]["imagenPublic"]?>">
				<br>
	<p><strong><?=$articulos[$i]["nombre"]?><br><?=$articulos[$i]["descripcion"]?></strong> </p>

	<p style="font-weight:bold;color:<?=$articulos[$i]["color"]?>">
		Precio: <?=$articulos[$i]["precio"]?>

	</p>

<select id="cantidad" name="<?=$articulos[$i]["id"]?>" style="width:40px; border-radius:20%" onChange="selectOnChange<?=$articulos[$i]["id"]?>(this)">
<option value=""></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>

				</div>
			</div>
			<?php } ?>

<button  class="btn btn-secondary"type="submit"  id="guardar" style="padding-left:3%;font-size:1.2em">Guardar </button><br>
</form>

</div>
<div class="listado" style="background-color:white;width:100%;height:20vh;text-align:center">
	<h4><strong>Productos Seleccionados</strong></h4>
			<ul>


				<?php

				 foreach ($_POST as $valor=>$cant) : ?>

			<?php if ($cant!=0) : ?>
			<li>
				<strong><?=$cant?></strong>
					<?=$articulos[$valor-1]["nombre"]?>

				<strong>  <?=$articulos[$valor-1]["precio"]*$cant?></strong>


				</li>
	<?php endif;?>

				 <?php if ($cant=0) : ?>
				 <?php return null;?>
						<?php endif;?>


				<?php endforeach;?>


			</ul>



<a name="fin"></a>
</div>
</body>
</html>
