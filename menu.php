

<?php
   include('session.php');
   if($_SESSION['isManager'] == true ) {
?>
<html>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  
   <head>
      <title>Menu </title>
   </head>
   
   <body>
      <h1>Bienvenido : <?php echo $login_session." - ".$_SESSION['login_id']; ?></h1>
	  
	  <a class="btn btn-info" href="cambiodptoP.php">Modificar departamento</button></a>
	  <a class="btn btn-info" href="cambiosal.html">Modificar salario</button></a>
	  <a class="btn btn-info"href="cambiocat.html">Modificar categoria</button></a>
	  <a class="btn btn-dark" href="consultadptom.html">Consultar departamento</button></a>
	  <a class="btn btn-dark" href="consultasalm.html">Consultar salario</button></a>
	  <a class="btn btn-dark" href="consultacatm.html">Consultar categoria</button></a>
	
	  
      <h2><a href = "logout.php">Cerrar Sesion</a></h2>
   </body>
   
</html>
<?php 
}else{
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  
	<head>
	
				<title></title>
	</head>
		<body bgcolor="#79CEF5">
		 <h1>Bienvenido <?php echo $login_session." - ".$_SESSION['login_id']; ?></h1> 
		
				<a class="btn btn-dark" href="consultadptom.php">Consultar departamento</a></li>
				<a class="btn btn-dark" href="consultasalm.php">Consulta salario</a></li>
				<a class="btn btn-dark" href="consultacatm.php">Consulta categoria</a></li>
			
		<h2><a href = "logout.php">Cerrar Sesion</a></h2>
		</body>
</html>
<?php 
}
?>



