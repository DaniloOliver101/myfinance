<?php
	class conexao{
		private $host="localhost";
		private $user="root";
		private $db="dtb_poupando";
		private $pass="";
		public $conn;
		
		public function __construct(){ //conectar no banco
			try{
				$this->conn = new PDO(
				"mysql:host=".$this->host.
				";dbname=".$this->db,$this->user,
				$this->pass);
				$this->conn->setAttribute(
				PDO::ATTR_ERRMODE,
				PDO::ERRMODE_EXCEPTION);
				return true;
			}catch(PDOExecption $e){
				echo "ERRO: ".$e->getMessage();
				return false;
			}
			
		}
	}
?>
