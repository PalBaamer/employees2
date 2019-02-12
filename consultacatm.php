 <?php
include('session.php');
  
   $id=$_SESSION['login_id'];
		
		consultaCategoria($id);
		
   function consultaCategoria($id){
	global $db;
   
   //TERMINAR
		if($_SESSION['isManager'] == true ){
			$idEmp=$_POST["idEmp"];
				$sql ="select title from titles where emp_no=".$idEmp." and to_date='9999-01-01'";
				$resultado = mysqli_query($db, $sql);
			if( $datos = mysqli_fetch_array($resultado)){
				$categoria=$datos['title'];
				echo "La categoria del empleado con id ".$idEmp." es: ".$categoria."</br";
			}
		
		}else{
			$sql ="select title from titles where emp_no=".$id." and to_date='9999-01-01'";
				$resultado = mysqli_query($db, $sql);
			if( $datos = mysqli_fetch_array($resultado)){
				$categoria=$datos['title'];
				echo "Tu categoria actual es: ".$categoria."</br";
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