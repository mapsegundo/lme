<?php

class Conexao {

var $banco = "nutec_lme";
var $link;
var $db_selected;
var $query;
var $resultado;

	public function toString(){
		return $this->link;
	}

	public function __constructor (){
		
			//conectaLocal();	
			conectaServidor();
		}

	function conectaLocal(){
			$this->link = mysql_connect("localhost","root","") or die(mysql_error());

			if (!$this->link) {
				die('Erro na conexao: ' . mysql_error());
			}
		
			$this->db_selected = mysql_select_db($this->banco, $this->link);	
	}
			
	function conectaServidor(){
			$this->banco = "nutec";
			$this->link = mysql_connect("172.26.2.6","nutec","PCT!v4a2") or die(mysql_error());
			
			if (!$this->link) {
				die('Erro na conexao: ' . mysql_error());
			}
		
			$this->db_selected = mysql_select_db($this->banco, $this->link);		
	}		

	function sql_query($query){
        //$this->conectaLocal();
		$this->conectaServidor();
        $this->query = $query;

        if($this->resultado = mysql_query($this->query)){
            $this->desconecta();
            return $this->resultado;
        }else{
            print "Ocorreu um erro ao executar a Query MySQL: <b>$query</b>";
      print "<br><br>";
      print "Erro no MySQL: <b>".mysql_error()."</b>";
      die();
            $this->desconecta();
        }        
    }

    function desconecta(){
        return mysql_close($this->link);
    }
	
	function criarTabela(){
		$script = "CREATE TABLE IF NOT EXISTS `cliente` (
		   `id` int(11) unsigned NOT NULL auto_increment,
		   `nome` varchar(255) NOT NULL default '',
		   `cnpj` varchar(255) NOT NULL default '',
		   `username` varchar(500) NOT NULL default '',
		   `password` varchar(500) NOT NULL default '',
		   `administrador` int(2) NOT NULL,
		   `status` int(2) NOT NULL default '1',
		   PRIMARY KEY  (`id`)
		   ) ENGINE=MyISAM  DEFAULT CHARSET=utf8";
		   mysql_query($script);
	}
	
	function popularTabela(){
		$script="INSERT into cliente(nome,username,password,status,administrador) values('Administrador','admin','admin',1,1)";
		mysql_query($script);
	}

	function criarBase($banco,$link){
		//$sql = 'CREATE DATABASE '.$banco;
		//if (mysql_query($sql, $link)) {
		//$db_selected = mysql_select_db($banco, $link);
		//if($db_selected) {
			criarTabela();
			popularTabela();
		//}
		//}else{echo "Houve algum erro, favor entre em contato com o NUTEC";
		//}
	}

	}
	?>