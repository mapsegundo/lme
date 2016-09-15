<?php require_once('seguranca.php'); ?>
<form action="includes/cadastrarCliente.php" method="post">
<table class="art-box-body art-block-body">
<?php if(isset($_GET['editarCliente'])) echo "
<tr>

<td>
Id:
</td>
<td>
<input readonly=\"true\" type=\"text\" name=\"id\" value=\"".$_GET['idCliente']."\" />
</td>

</tr>
"; ?>

<tr>

<td>
Nome:
</td>
<td>
<input type="text" name="nome" value="<?php if((isset($_GET['editarCliente'])|| isset($_GET['erroValidaInserirCliente'])) && isset($_GET['nomeCliente'])) echo $_GET['nomeCliente']; ?>" />
</td>

</tr>

<tr>

<td>
CNPJ / CPF:
</td>
<td>
<input type="text" name="cnpj" value="<?php if((isset($_GET['editarCliente'])|| isset($_GET['erroValidaInserirCliente'])) && isset($_GET['cnpjCliente'])) echo $_GET['cnpjCliente']; ?>"/>
</td>

</tr>
<tr>

<td>
Username:
</td>
<td>
<input type="text" name="username" value="<?php if((isset($_GET['editarCliente'])|| isset($_GET['erroValidaInserirCliente'])) && isset($_GET['usernameCliente'])) echo $_GET['usernameCliente']; ?>"/>
</td>

</tr>
<tr>

<td>
Password:
</td>
<td>
<input type="password" name="password" value="<?php if((isset($_GET['editarCliente'])|| isset($_GET['erroValidaInserirCliente'])) && isset($_GET['passwordCliente'])) echo $_GET['passwordCliente']; ?>"/>
</td>

</tr>
<tr>

<td>
Status:
</td>
<td>
<select name="status">
<option value="1" <?php if((isset($_GET['editarCliente'])|| isset($_GET['erroValidaInserirCliente'])) && isset($_GET['statusCliente']) && $_GET['statusCliente']==1) echo "selected" ?>>Ativo</option>
<option value="0" <?php if((isset($_GET['editarCliente'])|| isset($_GET['erroValidaInserirCliente'])) && isset($_GET['statusCliente']) && $_GET['statusCliente']==0) echo "selected" ?>>Inativo</option>
</select>
</td>

</tr>
<?php if(isset($_GET['erroValidaCliente'])){ echo "<tr><td colspan=\"2\" style=\"color:red;font-weight:bold;\">Todos os campos são obrigatórios</td></tr>"; } ?>
<tr>
<td>
     <span class="art-button-wrapper">
      <span class="art-button-l"> </span>
      <span class="art-button-r"> </span>
      <input type="submit" value="<?php if(isset($_GET['editarCliente'])) { echo "Editar"; } else if(isset($_GET['inserirCliente'])) { echo "Inserir"; }?>" class="art-button"/>
    </span> 
 
</td>
</tr>
</table>
</form>