<?php

$host = '127.0.0.1';
$user = 'root';
$pass = '';
$nomeBd = 'blog';
$link = mysqli_connect($host, $user, $pass, $nomeBd);


$nome = $_POST["tnome"]; 
$email = $_POST["temail"];
$senha = $_POST["tsenha"];
$perfil =$_POST["tperfil"];       


$sql1 = "insert into usuario(nome,senha,email,perfil) values ('".$nome."','".$senha."','".$email."','".$perfil."')";



$insert = mysqli_query($link,$sql1);

if($insert){
    header('location:Login.html');
}else{
   header('location:Cadastrar.html'); 
}


mysqli_close($link)//fecha a conexao



?>

