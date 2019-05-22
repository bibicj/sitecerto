<?php
    
   require_once('ini.php');
   
   $query = "SELECT * FROM `users` 
WHERE email=:email AND senha=:senha";

    $conex =  db_connect();

    $stmt = $conex->prepare($query);
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt->bindValue(':email',$email);
    $stmt->bindValue(':senha',md5($senha));

    $stmt->execute();
   
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if(count($usuario) <= 0)
    	header('Location:index.php?auth=erro');
    else
    	header('Location:painel.php');

   print_r($usuario);
   

?>