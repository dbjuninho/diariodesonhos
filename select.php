<?php
 
$conn = ibase_connect("localhost:/home/juninho/servidor/SONHOS.FDB",sysdba,castelo, '', 500) or die('Não foi possível conectar');
header( 'Content-Type: text/html; charset=UTF-8' );
$usuario=urldecode($_POST['usuario']);
$senha=urldecode($_POST['senha']);

$sql = "select * from USUARIOS where usuario='". $usuario ."' and senha='". $senha ."'";
$resposta = 0;
$resultado = ibase_query($conn,$sql);
while($row = ibase_fetch_object($resultado)){
	if ($row->USUARIO == "" || $row->SENHA == ""){
		$resposta = 0;			
	}else{
		$resposta = 1;	
	}
}

echo $resposta;
?>
