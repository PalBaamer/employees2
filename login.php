<?php
 include("config.php");
 
  
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
	  $result = mysqli_query($db,$sql);
	  
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
		
		
      if($count == 1) {
         
         $_SESSION['login_user'] = $myusername;
         $_SESSION['login_id'] = $row["id"];
		isManager($row["id"]);
        header("location: menu.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   
   function isManager($numEMP){
	   global $db;
	 /*º  	$sentencia = mysqli_stmt_init($db);
	  mysqli_stmt_prepare($sentencia,"select emp_no from dept_manager where emp_no=?");
	  mysqli_stmt_bind_param($sentencia,'i',$numEMP);
	  mysqli_stmt_execute($sentencia);
    mysqli_stmt_bind_result($sentencia, $resultadoSql);
	   mysqli_stmt_close($sentencia);*/
	  $sql = "select emp_no from dept_manager where emp_no=".$numEMP;
	  $result = mysqli_query($db,$sql);
	  
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
		if(!is_null($row['emp_no'])){
			$_SESSION['isManager'] =true;
		}else{
			$_SESSION['isManager'] =false;
		}
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = " " method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>