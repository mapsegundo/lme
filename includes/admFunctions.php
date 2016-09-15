<?php
	
		function removerCertificado(){
		@unlink("certificados/".$_GET['removerCertificado']);
	}
		
		function removerCliente($id){
			require_once('Conexao.php');
			
	    $conexao = new Conexao();
		$conexao->sql_query("DELETE from cliente WHERE id = ".$id);

		}
?>