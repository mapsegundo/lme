<?php require_once('seguranca.php'); ?>
<form action="includes/confirmaSenha.php" method="post">
<table class="art-box-body art-block-body">
<tr>
<td>
Senha antiga:
</td>
<td>
<input type="hidden" name="id" value="<?php echo $_SESSION['idUsuario']; ?>"/>
<input type="password" name="antiga" />
</td>
</tr>
<tr>
<td>
Senha nova:
</td>
<td>
<input type="password" name="nova" />
</td>
</tr>
<tr>
<td>
Confirmação:
</td>
<td>
<input type="password" name="confirma" />
</td>
</tr>
<?php if(isset($_GET['sucesso'])){
if($_GET['sucesso']){
echo "<tr><td colspan=\"2\" style=\"color:green; font-weight: bold;\">Senha alterada com suceso</td></tr>";
}else{
echo "<tr><td colspan=\"2\" style=\"color:red; font-weight: bold;\">Senha inválida</td></tr>";
}

} ?>
<tr>
<td colspan="2">
     <span class="art-button-wrapper">
      <span class="art-button-l"> </span>
      <span class="art-button-r"> </span>
<input type="submit" name="submit" value="Alterar" class="art-button">
    </span>
	</td>
	</tr>
</table>