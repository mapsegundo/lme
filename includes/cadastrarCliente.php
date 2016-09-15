<?php 

		function validaCadastro($metodo){
			if($_POST['nome']=="" || $_POST['cnpj']=="" || $_POST['username']=="" || $_POST['password']==""){
			if($metodo=="editar"){
				header('Location: ../index.php?erroValidaCliente=true&&editarCliente=true&&nomeCliente='.$_POST['nome'].'&&idCliente='.$_POST['id'].'&&cnpjCliente='.$_POST['cnpj'].'&&usernameCliente='.$_POST['username'].'&&passwordCliente='.$_POST['password'].'&&statusCliente='.$_POST['status']);
			}else{
				header('Location: ../index.php?erroValidaInserirCliente=true&&erroValidaCliente=true&&inserirCliente=true&&nomeCliente='.$_POST['nome'].'&&cnpjCliente='.$_POST['cnpj'].'&&usernameCliente='.$_POST['username'].'&&passwordCliente='.$_POST['password'].'&&statusCliente='.$_POST['status']);
			}
				exit();
				}
		}
		
		function editarCliente(){
		validaCadastro("editar");
			require_once('Conexao.php');
	    $conexao = new Conexao();
		$conexao->sql_query("UPDATE cliente set nome = '".$_POST['nome']."',cnpj = '".$_POST['cnpj']."',username = '".$_POST['username']."',password = '".$_POST['password']."',status = ".$_POST['status']." WHERE id = ".$_POST['id']);

			header('Location: ../index.php?listarCliente=true');
		}
		
		function inserirCliente(){
		validaCadastro("inserir");
			require_once('Conexao.php');	
	    $conexao = new Conexao();
		$conexao->sql_query("INSERT INTO cliente(nome,cnpj,username,password,status) values('".$_POST['nome']."','".$_POST['cnpj']."','".$_POST['username']."','".$_POST['password']."',".$_POST['status'].")");

			header('Location: ../index.php?listarCliente=true');
		}
		
if(isset($_POST['id'])){ editarCliente();}else{inserirCliente();}
?>