<?php
session_start();

			require_once('Conexao.php');	

			$antiga=$_POST['antiga'];
			$confirma=$_POST['confirma'];
			$nova=$_POST['nova'];
			
			$conexao = new Conexao();
			$conexao->sql_query("SELECT * FROM cliente WHERE id = ".$_SESSION['idUsuario']." and password = '".$antiga."'");
			
			$status=0;

			if(mysql_num_rows($conexao->resultado)>0){

				if($confirma!="" && $nova!="" && $nova==$confirma){
					$conexao = new Conexao();
					$conexao->sql_query("UPDATE cliente set password = '".$nova."' WHERE id = ".$_SESSION['idUsuario']);
					if($conexao->resultado>0) $status=1; else $status = 0;
				}
			}else{ $status=0; }

			header('Location: ../index.php?alterarSenha=true&&sucesso='.$status);


?>