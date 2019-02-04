<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

//Carrega um usuário
//$jose = new Usuario();
//$jose->loadById(4);
//echo $jose;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("u");
//echo json_encode($search);

//Carrega usuário usando login e senha
$usuario = new Usuario();
$usuario->login("jose", "123456");
echo $usuario;


?>