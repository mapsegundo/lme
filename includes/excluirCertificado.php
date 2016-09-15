<?php require_once('seguranca.php'); ?>
<?php

	$diretorio = getcwd(); 

	$ponteiro  = opendir($diretorio."/certificados/");

	while ($nome_itens = readdir($ponteiro)) {
	$itens[] = $nome_itens;
	}

	sort($itens);

	foreach ($itens as $listar) {
	$exploded = explode(".",$listar);
	$extensao = end($exploded);
	
	if ($listar!="." && $listar!=".." && $extensao=="pdf"){ 
	if (!is_dir($listar) ) { 
	$arquivos[]=$listar;
	}
	}
	}
if(isset($arquivos)){
	if ($arquivos != "") {

	$i=2;
	$classe="art-box art-block";
	echo "	<table cellspacing=\"0\" >";
	foreach($arquivos as $listar){
	if($i%2==0) $classe="art-box-body art-block-body"; else $classe="art-box art-blockcontent";
	print " 

	<tr class=\"".$classe."\" >
	<td >
	<a href=\"index.php?excluirCertificado=true&&removerCertificado=".$listar."\" >
	<img src=\"css/images/apagar.png\" style=\"border: 0px;\"/>
	</a>
	</td>
	<td>
	$listar
	</td>
	</tr>

	";
	
	$i++;
	}
	echo "</table>";
	}
	}else{	?>
	Não existem certificados cadastrados!<br/>
	     <span class="art-button-wrapper">
      <span class="art-button-l"> </span>
      <span class="art-button-r"> </span>
<a class="art-button" href="index.php?enviarCertificado=true">Enviar certificado</a>
    </span>
	<?php } ?>