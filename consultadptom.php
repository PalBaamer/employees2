 <?php
include('session.php');
  
   $id=$_SESSION['login_id'];
		
		consultaDpo($id);
		
   function consultaDpo($id){
	global $db;
   
   //TERMINAR
		if($_SESSION['isManager'] == true ) {
			$idEmp=$_POST['idEmp'];
				$sql ="select dept_name from dept_emp,departments where dept_emp.emp_no=".$idEmp." and dept_emp.dept_no=departments.dept_no ";
				$resultado = mysqli_query($db, $sql);
			if($datos = mysqli_fetch_array($resultado)){
				$dpto=$datos['dept_name'];
				echo "El nombre del departamento del empleado con id ".$idEmp." es: ".$dpto."</br>";
			}
		
		}else{
			$sql ="select dept_name from dept_emp,departments where dept_emp.emp_no=".$id." and dept_emp.dept_no=departments.dept_no";
				$resultado = mysqli_query($db, $sql);
			if($datos = mysqli_fetch_array($resultado)){
				$dpto=$datos['dept_name'];
				echo "Tu departamento actual es: ".$dpto."</br>";
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
