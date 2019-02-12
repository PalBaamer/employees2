
 <?php
include('session.php');
  
   $id=$_SESSION['login_id'];
		
		consultaSalario($id);
		
   function consultaSalario($id){
	global $db;
   
   //TERMINAR
   if($_SESSION['isManager'] == true ){
			$idEmp=$_POST["idEmp"];
				$sql ="select salary from salaries where emp_no=".$idEmp." and to_date='9999-01-01'";
				$resultado = mysqli_query($db, $sql);
			if( $datos = mysqli_fetch_array($resultado)){
				$salario=$datos['salary'];
				echo "El salario del empleado con id ".$idEmp." es: ".$salario;
			}
		
		}else{
			$sql ="select salary from salaries where emp_no=".$id." and to_date='9999-01-01'";
				$resultado = mysqli_query($db, $sql);
			if( $datos = mysqli_fetch_array($resultado)){
				$salario=$datos['salary'];
				echo "Tu salario actual es: ".$salario;
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