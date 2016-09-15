<?php session_start(); if(isset($_SESSION['administrador'])){require_once('includes/admFunctions.php');} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" >
<head>

<?php require_once('includes/head.php'); ?>

</head>
<body>
<?php 	if(isset($_GET['removerCertificado'])){ 
			removerCertificado();
		} 
		if(isset($_GET['excluirCliente']) && isset($_GET['idCliente'])) {
			removerCliente($_GET['idCliente']);
		}
		require_once('includes/background_header.php'); 
?>

<div id="art-main">
    <div class="cleared reset-box"></div>
	
<?php require_once('includes/header.php'); ?>

    <div class="cleared reset-box"></div>
    <div class="art-box art-sheet">
        <div class="art-box-body art-sheet-body">
		

<?php if(isset($_SESSION['logado'])) { require_once('includes/menu.php'); }?>

<div class="cleared reset-box"></div>
<div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        

						<?php require_once('includes/bloco.php'); ?>

                        
                        <div class="art-layout-cell art-content">
<div class="art-box art-post">
    <div class="art-box-body art-post-body">

<?php 	if(isset($_SESSION['logado'])){
			if(isset($_SESSION['administrador'])){
				if(isset($_GET['enviarCertificado'])) { require_once('includes/enviarCertificado.php'); }
				if(isset($_GET['inserirCliente']) || isset($_GET['editarCliente'])) { require_once('includes/inserirCliente.php'); }
				if(isset($_GET['listarCertificados'])) { require_once('includes/listarCertificado.php'); }
				if(isset($_GET['excluirCertificado'])) { require_once('includes/excluirCertificado.php'); }
				if(isset($_GET['listarCliente'])) { require_once('includes/listarCliente.php'); }
				if(isset($_GET['excluirCliente'])) { require_once('includes/excluirCliente.php'); }
				if(isset($_GET['alterarSenha'])) { require_once('includes/alterarSenha.php'); } 
			} else { 
				if(isset($_GET['alterarSenha'])) 
					require_once('includes/alterarSenha.php'); 
				else 
					require_once('includes/listarCertificado.php');
			} 
		}
?>
	

		<div class="cleared"></div>
    </div>
</div>

                          <div class="cleared"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
			
<?php require_once('includes/footer.php'); ?>

    		<div class="cleared"></div>
        </div>
    </div>

</div>

</body>
</html>
