<?php
require_once("Estudiantes.php");
$Estudiantes=new Estudiantes();
$consulta=$Estudiantes->listar_estudiantes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lista estudiantes</title>
	<style>
		th{
			padding: 5px;
			background: pink;
			color:black;
		}
		td{
			padding: 5px;
			border:solid 1px pink;
		}
		table{
			width:80%;
			border-collapse:collapse;
		}
		a{
			background:white ;
			color:green;
			text-decoration:none;
			padding:5px;
			font-family: Arial;
			border-radius:5px;
		}
		img{
			width:20px;
		}
		img{
			width:20px;
		}
	</style>
</head>
<body>
	<h1 style="background:salmon;text-align:center;color:black;">Lista Estudiantes Nayeli Columba</h1>

	<a href="formulario_estudiante.php">Nuevo Estudiante</a>
	<table align="center">
		<tr>
			<th style="background:pink;color:black;">#</th>
			<th style="background:pink;color:black;">Nombres</th>
			<th style="background:pink;color:black;">Apellidos</th>
			<th style="background:pink;color:black;">Cedula</th>
			<th style="background:pink;color:black;">Edad</th>
			<th style="background:pink;color:black;">Ciudad</th>
			<th style="background:pink;color:black;">Genero</th>
			<th>Acciones</th>
		</tr>
		<?php
		$x=0;
		foreach ($consulta as $c) {
			$x=$x+1;
			echo "<tr>
			     <td>$x</td>
			      <td>{$c["est_nombres"]}</td>
			      <td>{$c["est_apellidos"]}</td>
			      <td>{$c["est_cedula"]}</td>
			      <td>{$c["est_edad"]}</td>
			      <td>{$c["est_ciudad"]}</td>
			      <td>{$c["est_genero"]}</td>
			      <td>

			      <a href=>
			      <img src='edit.png'/>

			      <a href=>
			      <img src='delete.png'/>
			      </a>

			      </td>

			</tr>";
		}

	

		?>
	</table>
</body>
</html>