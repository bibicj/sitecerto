<?php 
  
   session_start();
   $_SESSION['auth'] = false;

   $usuarios = [
     ['login'=> 'asdfg','senha'=>123456],
     ['login'=> 'jkl','senha'=>123]
   ];


   $login = $_POST['login'];
   $senha = $_POST['senha'];
    
   $auth = false; 

   foreach ($usuarios as  $usuario) {
   	  if($login == $usuario['login'] AND
   	      $senha == $usuario['senha']){

              $auth = true;
      }
     
    }


    if($auth){
    	header('Location:home.php');
        $_SESSION['auth'] = true;
    }
    	
    else
    	header('Location:index.php?login=erro');