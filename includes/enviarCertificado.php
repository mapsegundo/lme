<?php require_once('seguranca.php'); ?>
<form action="includes/upload_file.php" method="post" enctype="multipart/form-data">
Certificado:

<input type="file" name="file" id="file" class="art-button"><br>

<?php if(isset($_GET['erroEnvioCertificado'])) echo "<span style=\"color: red; font-weight: bold;\" >Certificado já existe! Exclua-o primeiro.</span><br/>"  ?>
<?php if(isset($_GET['erroEnvioCertificadoInvalido'])) echo "<span style=\"color: red; font-weight: bold;\" >Certificado inválido.</span><br/>"  ?>
<?php if(isset($_GET['okEnvioCertificado'])) echo "<span style=\"color: green; font-weight: bold;\" >Certificado ".$_GET['okEnvioCertificado']." foi enviado com sucesso</span><br/>"  ?>
     <span class="art-button-wrapper">
      <span class="art-button-l"> </span>
      <span class="art-button-r"> </span>
<input type="submit" name="submit" value="Enviar" class="art-button">
    </span>
</form>