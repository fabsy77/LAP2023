<?php

    include_once('../class/user.php');
    //verifica se valores dentro do POST estao sendo enviados
    if(isset($_POST['uname']) && !empty($_POST['uname']) && isset($_POST['psw']) && !empty($_POST['psw'])){

        //criar uma variavrl que vai consultar na classe user onde o usuasrio e a senha exista igual ao valor q eu passei no post
         $class_user = new User();
        //chamando o método getEmailAndPassword de uma instância da classe "class_user" com dois parâmetros
         $verify_user = $class_user->getEmailAndPassword($_POST['uname'], $_POST['psw'], 'user');

        // se verfy_user for verdadeiro
         if(!empty($verify_user)){
            //verifica as informacoes do usuario e salva no verify_user e encaminha para a pagina produto
            $_SESSION['user_info'] =  $verify_user;
            
            header('location: ../index.php');
         }
         else{
            echo 'email or password incorrect';
            header('location: login.php');
         }     
    }


?>