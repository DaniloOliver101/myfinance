<?php

	include('../server/conexao.class.php');

class dados(){
	private $codcli;
	private $nomcli;
	private $emailcli;
	private $senha;
	private $datnasc;
	private $coduf;
	private $cidade;
	private $codgenero;


	public function getCodCli(){
		return $codcli;
	}
	public function setCodcli($codcli){
		this.$codcli = $codcli;
	}
	public function getNomcli(){
		return $nomcli;
	}
	public function setNomcli($nome){
		this.$nomcli;

	}
	public function getEmail(){
		return $emailcli;
	}
	public function setEmail($email){
		this.$emailcli = $email;
	}
	public function getSenha(){
		return $senha;
	}
	public function setSenha($senha){
		this.$senha = $senha;
	}

	public function getDatnasc(){
		return $datnasc;
	}
	public function setDatnasc($datanasc){
		this.$datnasc = $datnasc;
	}
	public function getCoduf(){
		return $coduf;
	}
	public function setCoduf($coduf){
		this.$coduf = $coduf;
	}
	public function getCodGenero(){
		return $codgenero;
	}
	public function setCodgenero($codgenero){
		this.$codgenero = $codgenero;
	}

	public function newcliente(){
		$con = new conexao();

		try{
			$query = $con->conn->prepare(

				"INSERT INTO TBL_CLIENTES(Nomcli, email, DataNasc, CodGenero, Estado, senha)
				VALUES(:nc,:ec,:dn,:cg,:uf,:ss)");
			$query->bindValue(":nc",$this->getNomcli());
			$query->bindValue(":ec",$this->getEmail());
			$query->bindValue(":dn",$this->getDatnasc());
			$query->bindValue(":cg",$this->getCodGenero());
			$query->bindValue(":uf",$this->getCoduf());
			$query->bindValue(":ss",$this->getSenha());
			return $query->execute();

		}
		catch(PDOExeption $error)
			{
				echo $error->getMessage();
			}

	}
	

}

?>