<div class="art-layout-cell art-sidebar1">
<div class="art-box art-block">
    <div class="art-box-body art-block-body">
                <div class="art-bar art-blockheader">
                    <h3 class="t"><?php if(isset($_SESSION['logado'])) { echo "Bem vindo";}else{ echo "Login"; }?></h3>
                </div>
<div class="art-box art-blockcontent">
                    <div class="art-box-body art-blockcontent-body">
					
					<?php if(isset($_SESSION['logado'])) { ?>
					<table>
					<tr>
					<td style="font-weight: bold;">
					Usuário:
					</td>
					</tr>
					<tr>
					<td>
					<?php if(strlen($_SESSION['usuario']) >16) { for($i = 0; $i < 17; $i++) {echo $_SESSION['usuario'][$i]; } echo "...";}else{echo $_SESSION['usuario'];} ?>
					</td>
					</tr>
										<?php if(!isset($_SESSION['administrador'])){ ?>
					<tr>
					<td style="font-weight: bold;">
					CNPJ/CPF:
					</td>
					</tr>
					<tr>
					<td>
					<?php echo $_SESSION['cnpjcpf'] ?>
					</td>
					</tr>
					<?php } ?>
					<tr>
					<td>
					<p>
					<?php 
					echo "<span class=\"art-button-wrapper\"><span class=\"art-button-l\"> </span><span class=\"art-button-r\"> </span><a class=\"art-button\" href=\"index.php?sair=true\">Sair</a></span> ";
					if(isset($_GET['sair'])){
					session_destroy();
					header('Location: index.php');
					}
					?>
					</p>
					</td>
					</tr>
					</table>
					<?php } else {?>
					<form action="includes/verificarLogin.php" method="post">
					<table>
					<tr>
					<td>Usuário:</td>
					</tr>
					<tr>
					<td><input type="text" name="username"/></td>
					</tr>
					<tr>
					<td>Senha:</td>
					</tr>
					<tr>
					<td><input type="password" name="password"/></td>
					</tr>
					<?php if(isset($_GET['erro'])){ echo "<tr><td colspan=\"2\" style=\"color: red; font-weight: bold;\">Login inválido</td></tr>"; } ?>
					<tr>
					<td>
					<span class="art-button-wrapper">
					  <span class="art-button-l"> </span>
					  <span class="art-button-r"> </span>
					  <input type="submit" value="Login" class="art-button"/>
					</span> </td>
					</tr>
					</table>
					</form>
					<?php } ?>


                                		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>
  <div class="cleared"></div>
                        </div>