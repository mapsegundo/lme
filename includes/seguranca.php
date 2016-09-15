<?php 
if(!isset($_SESSION['logado'])){
header('Location: ../index.php');
exit();
}
?>