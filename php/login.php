<?php
    require("../banco/conecta.php");
    session_start();
    $senha = md5($_POST['senha']);
    $login = $_POST['usuario'];
    
------------------------------------------------------------------------------------------

        include 'dbconnection.php';
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    
    $sanitized_userid = 
        mysqli_real_escape_string($db, $userid);
        
    $sanitized_password = 
        mysqli_real_escape_string($db, $password);
        
    $sql = "SELECT * FROM users WHERE username = '" 
        . $sanitized_userid . "' AND password = '" 
        . $sanitized_password . "'";
        
    $result = mysqli_query($db, $sql) 
        or die(mysqli_error($db));
        
    $num = mysqli_fetch_array($result);
        
    if($num > 0) {
        echo "Login Success";
    }
    else {
        echo "Wrong User id or password";
    }
    
    --------------------------------------------------------------------------------------
    
    $query = "SELECT * FROM tb_admin WHERE nm_admin ='$login' AND ds_senha = '$senha'";
    $result = mysqli_query($conexao, $query);
    echo $query;
    if(mysqli_num_rows($result)==1){
        $_SESSION['acesso'] = "admin";
        header('location:../inicio.php');
    }else{
         header('location:../index.php');
    }
    

  