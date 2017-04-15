<?php
class usuario extends model {
	private $nome;

	public function __construct() {
		parent::__construct(); //executa o construtor da classe ancestral
	}

	public function setNome($n) {
		$this->nome = $n;
	}
	public function getNome() {
		$array = array();
		$sql = 'SELECT * FROM AGENTES';
		$sql = $this->db->query($sql);
		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
		return $array;
	}
}
?>