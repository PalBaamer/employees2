<?php
   include('session.php');
   $id=$_POST["idEmployee"];
   $salario=$_POST["salarioEmp"];
		
		cambiarSalario($id,$salario);
		
function cambiarSalario($empID, $salario){
	global $db;
	
	/*$sentencia = mysqli_stmt_init($db);
	mysqli_stmt_prepare($sentencia, "update salaries set to_date=now() where emp_no=".$empID." and to_date > now()");
	mysqli_stmt_prepare($sentencia, "insert into salaries values (".$empID." , ".$salario.", now(),'9999-01-01'");

	
	mysqli_stmt_bind_param($sentencia,'is',$salario,$empID );

    mysqli_stmt_execute($sentencia);

    mysqli_stmt_close($sentencia);*/
	
	
	  $sql = "update salaries set to_date=now() where emp_no=".$empID." and to_date > now()";
	  $result = mysqli_query($db,$sql);
	  
	  $sql1 = "replace into salaries values (".$empID." , ".$salario.", now(),'9999-01-01')";
	  $result1 = mysqli_query($db,$sql1);
	  
	$sentencia2="select * from salaries where emp_no=".$empID." and to_date='9999-01-01'";
		$resultado = mysqli_query($db,$sentencia2);
		$resSentencia = mysqli_fetch_array($resultado);
			echo "La operación ha sido realizada con éxito</br></br>";
			if($salario=$resSentencia['salary']){
		
			echo "El numero de empleado".$empID." ahora tiene ".$salario."</br></br>";
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