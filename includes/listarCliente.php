
<?php
			require_once('Conexao.php');
			
			$conexao = new Conexao();
			$conexao->sql_query("SELECT * FROM cliente");
			
			if(mysql_num_rows($conexao->resultado)>0){
			$i=2;
			$classe="art-box art-block";
			echo "<table cellspacing=\"0\" >";
			while($rs = mysql_fetch_array($conexao->resultado)){
			if($i%2==0) $classe="art-box-body art-block-body"; else $classe="art-box art-blockcontent";
			echo " 

	<tr class=\"".$classe."\" >
	<td >
	<a href=\"index.php?editarCliente=true&&nomeCliente=".$rs['nome']."&&idCliente=".$rs['id']."&&cnpjCliente=".$rs['cnpj']."&&usernameCliente=".$rs['username']."&&passwordCliente=".$rs['password']."&&statusCliente=".$rs['status']."\" >
	<img src=\"css/images/pdf.png\" style=\"border: 0px;\"/>
	</a>
	</td>
	<td>
	<b>Nome: </b>$rs[nome]
	</td>
	</tr>

	";
	
	$i++;
	}
	echo "</table>";
			}else{echo "Não existem certificados cadastrados!";}

			?>
