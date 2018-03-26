<?php
require_once 'conexao.class.php';
class cadastroMetaCliente{
	private $codCli;
	private $codMeta;
	private $descricao;
	private $valor;
	private $dataconclusao;
	private $motivo;
		public function getMotivo(){
			return $this->motivo;
		}
		public function setMotivo($motivo){
			$this->motivo = $motivo;
		}
	
		public function getCodCli(){
			return $this->codCli;
		}
		public function setCodCli($codCli){
			$this->codCli=$codCli;
		}
		public function getCodMeta(){
			return $this->codMeta;
		}
		public function setCodMeta($codMeta){
			$this->codMeta=$codMeta;
        }
        public function getDescricao(){
			return $this->descricao;
		}
		public function setDescricao($descricao){
			$this->descricao=$descricao;
        }
		public function getValor(){
			return $this->valor;
		}
		public function setValor($valor){
			$this->valor=$valor;
		}
		public function getDataConclusao(){
			return $this->dataconclusao;
		}
		public function setDataConclusao($dataconclusao){
			$this->dataconclusao=$dataconclusao;
		}

		
		public function inserir(){
			$c = new conexao();//invocando construtor do metodo anterior  -prepare passando os dados
			try{
				$stmt = $c->conn->prepare(
				"INSERT INTO tbl_metascliente(codcli, codMeta, descricao, valor, DataConclusao, descmotivo)".
				"VALUES(:cc,:cm,:des,:vm,:dc,:dm)");
				$stmt->bindValue(":cc",$this->getCodCli());//parametro que vai ser passado
				$stmt->bindValue(":cm",$this->getCodMeta());
				$stmt->bindValue(":des",$this->getDescricao());
				$stmt->bindValue(":vm",$this->getValor());
				$stmt->bindValue(":dc",$this->getDataConclusao());
				$stmt->bindValue(":dm",$this->getMotivo());
				return $stmt->execute();
			}catch(PDOExeption $e){echo $e->getMessage();}
        }
        
		public function alterar(){
			 $c = new conexao();
			try{
				$stmt = $c->conn->prepare(
				" UPDATE tbl_metascliente set Descricao=:des, Valor=:vm, DataConclusao=:dc where codMeta=:cm ");
				//$stmt->bindValue(":cc",$this->getcodCli());//parametro que vai ser passado
				$stmt->bindValue(":cm",$this->getCodMeta());
				$stmt->bindValue(":des",$this->getDescricao());
				$stmt->bindValue(":vm",$this->getValor());
				$stmt->bindValue(":dc",$this->getDataConclusao());
				return $stmt->execute();
			}catch(PDOExeption $e){echo $e->getMessage();}
		}
		 public function apagar(){
			 $c = new conexao();
			 try{
				 $stmt = $c ->conn->prepare(
				 "DELETE from tbl_metascliente ".
				 "where  CodMeta=:cm");
				 $stmt->bindValue(":cm",$this->getCodMeta());
				 return $stmt->execute();
				}catch(PDOException $e){echo $e-> getMessage();}
			}
			
		public function buscarTodos(){
			session_start();
			$c= new conexao();
			try{
				$stmt = $c->conn->prepare(
				"select * from tbl_metascliente where CodCli=:cc");
				//$stmt->bindValue(":cc",$this->getCodCli());
				$stmt->bindValue(":cc",$_SESSION['CodCli']);
				$stmt->execute();
				$r=$stmt->fetchALL();//retorna todos
				return $r;
			}catch(PDOExeption $e){echo $e->getMessage();}
		}
		public function buscarMetas(){
			session_start();
			$c= new conexao();
			try{
				$stmt = $c->conn->prepare(
				"select * from  tbl_metascliente where CodCli=:cc");
				//$stmt->bindValue(":cc",$this->getCodCli());
				$stmt->bindValue(":cc",$_SESSION['codCli']);
				$stmt->execute();
				$r=$stmt->fetchALL();//retorna um
				return $r;
			}catch(PDOExeption $e){echo $e->getMessage();}
		}
		public function buscarId(){
			$c= new conexao();
			try{
				$stmt = $c->conn->prepare(
				"select * from  tbl_metascliente where CodCli=:cc");
				$stmt->bindValue(":cc",$this->getCodCli());
				//$stmt->bindValue(":cr",$this->getCodRenda());
				$stmt->execute();
				$r=$stmt->fetchAll();//retorna um
				return $r;
			}catch(PDOExeption $e){echo $e->getMessage();}
		}
	}	
?>		