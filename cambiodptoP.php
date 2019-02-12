<?php
   include('session.php');

	function listaDpto(){
	global $db;
	$sql="select dept_name from departments";
	$resultado = mysqli_query ($db,$sql);

	$rows = array();

	while(($row = mysqli_fetch_array($resultado))) {
		echo "Departamento<option value=".$row['dept_name'].">".$row['dept_name']."</option>";
	
	}
	}
   
?>
<html>
			<head>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
						<title>Cambio departamento</title>
			</head>
				<body bgcolor="#79CEF5">
					<form name='fno' action='cambiodpto.php' method='post'>
					<h1></h1>
					Cambiar el departamento:</br>
					<table>
					 <tr>
							 <td>Selecciona el departamento destino
							 <td><select name="dpto" id="dpto" class="form-control">
							 <?php listaDpto();	?>	
							 </select>
							 <td>Id de empleado:
							 <td>
							 <input id="empleado" type="text" class="form-control" name="empleado" placeholder=" ID empleado">
							 
					 </tr>
					</table>
					<button class="btn btn-outline-success" type="submit">Mostrar</button>
									
										
					</div>
			</body>
</html>