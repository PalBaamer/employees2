<?php
   include('session.php');
   $id=$_POST["idEmployee"];
   $nuevaCat=$_POST["nuevaCategoria"];
		cambiarCat($id,$nuevaCat);
		
		
function cambiarCat($empID, $nuevaCat){
	global $db;
	
	/*$sentencia = mysqli_stmt_init($db);
	mysqli_stmt_prepare($sentencia, "update titles set to_date=now() where emp_no=".$empID." and to_date > now()");
	mysqli_stmt_prepare($sentencia, "insert into titles values (".$empID." , ".$nuevaCat.", now(),'9999-01-01'");

	
	mysqli_stmt_bind_param($sentencia,'is',$nuevaCat,$empID );

    mysqli_stmt_execute($sentencia);

    mysqli_stmt_close($sentencia);*/
	
	if (is_null($nuevaCat)){
		echo "La categoria está vacía";
	}else{
	 $sql = "update titles set to_date=now() where emp_no=".$empID." and to_date > now()";
	  $result = mysqli_query($db,$sql);
	  
	  
	  $sentencia = "replace into titles values (".$empID." , '".$nuevaCat."', now(),'9999-01-01')";
	  $result1 = mysqli_query($db,$sentencia);
	 
	 //Aparte de que la sentencia sea efectiva, vamos mostrar la nueva categoria del empleado
	 $sentencia2="select * from titles where emp_no=".$empID." and to_date='9999-01-01'";
		
		$resultado = mysqli_query($db,$sentencia2);
		
		$resSentencia = mysqli_fetch_array($resultado);
			
			echo "La operación ha sido realizada con éxito</br></br>";
			
			if($categoria=$resSentencia['title']){
			echo "El numero de empleado".$empID." ahora es ".$categoria."</br></br>";
			}

	}
}
?>

<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

   <body>
	 <a class="btn btn-outline-success" href="menu.php">Volver</a>
      <a href = "logout.php">Cerrar Sesion</a>
   </body>
   
</html>
