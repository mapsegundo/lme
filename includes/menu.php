<div class="art-bar art-nav">
<div class="art-nav-outer">
	<ul class="art-hmenu">
	<?php if(isset($_SESSION['administrador'])){ ?>
		<li>
			<a href="#" class="<?php if(!isset($_GET['alterarSenha'])) echo "active" ?>">Administração</a>
			<ul>
				<li>
                    <a href="#">Clientes</a>
					<ul>
						<li>
						<a href="index.php?listarCliente=true">Listar</a>
						</li>
						<li>
						<a href="index.php?inserirCliente=true">Cadastrar</a>
						</li>
						<li>
						<a href="index.php?excluirCliente=true">Excluir</a>
						</li>
					</ul>
                </li>
				<li>
                    <a href="#">Certificados</a>
						<ul>
						<li>
						<a href="index.php?listarCertificados=true">Listar</a>
						</li>
						<li>
						<a href="index.php?enviarCertificado=true">Enviar</a>
						</li>
						<li>
						<a href="index.php?excluirCertificado=true">Excluir</a>
						</li>
					</ul>
                </li>
			</ul>
		</li>
		<?php } else{ ?>
				<li>
                    <a href="index.php?listarCertificados=true" class="<?php if(!isset($_GET['alterarSenha'])) echo "active" ?>">Certificados</a>
                </li>
		<?php } ?>
		<li>
			<a href="index.php?alterarSenha=true" class="<?php if(isset($_GET['alterarSenha'])) echo "active" ?>"><table cellspacing="0"><tr><td><img src="css/images/key.png" style="border: 0px;"/></td><td>Alterar senha</td></tr></table></a>
		</li>		
		<?php if(isset($_SESSION['administrador'])){ ?>
		<li>
			<a href="ajuda/index.htm" >Ajuda</a>
		</li>		
		<?php } ?>
	</ul>
</div>

</div>
