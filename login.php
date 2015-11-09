<?php

try{
	$conexao=mysqli_connect("https://sonhos-dbjuninho.rhcloud.com/phpmyadmin/","adminrldbUYF","Rb7tVhMuCGlE","sonhos");
}
catch(Exception $e) {
	echo 'Mensagem: ' .$e->getMessage();
}

validaUsuario($conexao,$_POST["usuario"],$_POST["senha"]);

function validaUsuario($conexao,$usuario,$senha) {
	$query = "select * from usuarios where usuario = '{$email}' and senha = '{$senha}'";
	$resultado = mysqli_query($conexao, $query);
	if (!mysqli_fetch_assoc($resultado)){
		echo 0;
	}
	else{
		echo 1;
	}

}

?>
