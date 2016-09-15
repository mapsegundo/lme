<?php

if ((($_FILES["file"]["type"] == "application/pdf")))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Retorno: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    /*echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";*/

    if (file_exists("../certificados/".$_FILES["file"]["name"]))
      {
      header('Location: ../index.php?erroEnvioCertificado=true&&enviarCertificado=true');
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],"../certificados/".strtolower($_FILES["file"]["name"]));
	  header('Location: ../index.php?okEnvioCertificado='.$_FILES["file"]["name"].'&&enviarCertificado=true');
      }
    }
  }
else
  {
  header('Location: ../index.php?erroEnvioCertificadoInvalido=true&&enviarCertificado=true');
  }
?>