

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
  
   <form method="POST" action="validar_login.php">
   	 <input type="text" name="login" placeholder="login">
   	 <br><br>
   	 <input type="password" name="senha" placeholder="senha"><br><br>
   	 <h3><?php if(isset($_GET['login']) AND
   	              $_GET['login'] == 'erro'  ):

                      echo 'Usuario ou senha invalida';
                	
                          
                endif; 
                      

   	                  ?></h3>



   	 <h3><?php if(isset($_GET['auth']) AND$_GET['auth'] == 'erro2' ):

                      echo 'Faça login';
                	
                          
                endif; 
                      

   	                  ?></h3>
   	 <input type="submit" name="enviar" ><br><br>
   	
   </form>
</body>
</html>