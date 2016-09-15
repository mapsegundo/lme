<?php require_once('seguranca.php'); ?>
<?php
			require_once('Conexao.php');
	    $conexao = new Conexao();
		$conexao->sql_query("SELECT * FROM cliente");
		
			if(mysql_num_rows($conexao->resultado)>1){
			$i=2;
			$classe="art-box art-block";
			echo "<table cellspacing=\"0\" >";
			while($rs = mysql_fetch_array($conexao->resultado)){
			if($rs['administrador']!=1){
			if($i%2==0) $classe="art-box-body art-block-body"; else $classe="art-box art-blockcontent";
			echo " 

	<tr class=\"".$classe."\" >
	<td >
	<a href=\"index.php?excluirCliente=true&&idCliente=".$rs['id']."\" >
	<img src=\"css/images/apagar.png\" style=\"border: 0px;\"/>
	</a>
	</td>
	<td>
	<b>Nome: </b>$rs[nome]
	</td>
	</tr>

	";
	
	$i++;
	}
	}
	echo "</table>";
	}else{	?>
	Não existem clientes cadastrados!<br/>
	     <span class="art-button-wrapper">
      <span class="art-button-l"> </span>
      <span class="art-button-r"> </span>
<a class="art-button" href="index.php?inserirCliente=true">Cadastrar cliente</a>
    </span>
	<?php } ?>
