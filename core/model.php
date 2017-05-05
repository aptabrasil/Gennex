<?php
class model {
	protected $db;
	protected $dbdados;
	public function __construct() {
		global $config;
		try {
			$this->db = new PDO('mysql:dbname='.$config['dbmaster'].';host='.$config['host'],$config['dbuser'],$config['dbpass']);
		} catch(PDOException $e) {
			echo 'Falhou : '.$e->getMessage();

		}
		try {
			$this->dbdados = new PDO('mysql:dbname='.$config['dbname'].';host='.$config['host'],$config['dbuser'],$config['dbpass']);
		} catch(PDOException $e) {
			echo 'Falhou : '.$e->getMessage();

		}

	}
}
?>