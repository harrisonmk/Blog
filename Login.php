<?php 
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$nomeBd = 'blog';

// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['tlogin'];
$senha = $_POST['tsenha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
$con = mysql_connect($host,$user,$pass,$nomeBd) or die
 ("Sem conexão com o servidor");
$select = mysql_select_db("blog") or die("Sem acesso ao DB");
 
// A variavel $result pega as varias $login e $senha, faz uma 
//pesquisa na tabela de usuarios
$result = mysql_query("SELECT * FROM `usuario` 
WHERE `nome` = '".$login."' AND `senha`= '".$senha."'");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
resultado ele redirecionará para a página site.php ou retornara  para a página 
do formulário inicial para que se possa tentar novamente realizar o login */
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['tlogin'] = $login;
$_SESSION['tsenha'] = $senha;
header('location:index.html');
}
else{
  unset ($_SESSION['tlogin']);
  unset ($_SESSION['tsenha']);  
  header('location:Login.html');
   
  }
?>