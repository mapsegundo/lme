<?php 
session_start();
require_once('Conexao.php');


	function verificaLogin(){
	    $conexao = new Conexao();
		$conexao->sql_query("SELECT * FROM cliente where username = '$_POST[username]' and password = '$_POST[password]' and status = 1");
		
		if(mysql_num_rows($conexao->resultado)>0){
			$rs=mysql_fetch_array($conexao->resultado);
			$_SESSION['usuario']=$rs['nome'];
			$_SESSION['cnpjcpf']=$rs['cnpj'];
			$_SESSION['logado']=true;
			$_SESSION['idUsuario']=$rs['id'];
			
				if($rs['administrador']==1){
				$_SESSION['administrador']=true;
				}
					header('Location: ../index.php');

		}else{
			header('Location: ../index.php?erro=true');
		}
	
	}
	

		//criarBase($banco,$link);
		verificaLogin();

?>
