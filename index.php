<?php


require_once("config.php");


//Primeiro sql
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);



//carrega um usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;


//Carrega lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);



//carrega lista de usuarios pelo login
//$search = Usuario::search("j");
//echo json_encode($search);



//carrega um usuario usando login e senha
//$usuario = new Usuario();
//$usuario-> login("daniel","1000");
//echo $usuario;



//Criando um novo usuario
//$aluno = new Usuario("aluno","@lun0");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "321654");

echo $usuario;



?>