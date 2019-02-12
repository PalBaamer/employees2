<?php
   include('session.php');
   $id=$_POST['empleado'];
   $dpto=$_POST["dpto"];
		cambioDpto($id,$dpto);
		
		
function cambioDpto($id, $dpto){
	global $db;
	
	/*$sentencia = mysqli_stmt_init($db);
	mysqli_stmt_prepare($sentencia, "update titles set to_date=now() where emp_no=".$empID." and to_date > now()");
	mysqli_stmt_prepare($sentencia, "insert into titles values (".$empID." , ".$nuevaCat.", now(),'9999-01-01'");

	
	mysqli_stmt_bind_param($sentencia,'is',$nuevaCat,$empID );

    mysqli_stmt_execute($sentencia);

    mysqli_stmt_close($sentencia);*/
	
	if (is_null($dpto)){
		echo "La variable está vacía";
	}else{
	 $sql1 = 'update dept_emp set to_date="'.date("Y-m-d").'" where emp_no="'.$id.'"and  to_date="9999-01-01" ';
		 $result = mysqli_query($db,$sql1);
	
	$sql2 = "replace into dept_emp values (".$id." , '".$dpto."' ,now(),'9999-01-01')";
	 $result2 = mysqli_query($db,$sql2);
				echo "El empleado ha cambiado de departamento";
		
	//Aparte de que la sentencia sea efectiva, vamos mostrar la nueva categoria del empleado
	$sentencia2="select * from dept_emp where emp_no=".$id." and to_date='9999-01-01'";
		$resultado = mysqli_query($db,$sentencia2);
		$resSentencia = mysqli_fetch_array($resultado);
			if($nombreDpto=$resSentencia['dept_no']){
			echo "El numero de empleado".$id." ahora pertenece al departamento con codigo ".$nombreDpto."</br></br>";
			
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