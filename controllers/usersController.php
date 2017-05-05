<?php
/**
* 
*/
class usersController extends controller
{
	
	public function __construct() {
		//parent::__construct();
		$user = new Users();
		if ($user->isLogged() == false) {
			header("Location: ".BASE_URL."/login");
		}
	}

	public function index() {
		$data = array();
	  	$u = new Users();
  		$u->setLoggedUser();
  		$company = new Company($u->getCompany());
  		$data['company_name'] = $company->getName();
  		$data['user_name'] = $u->getName();
  		$data['title'] = 'USUÁRIOS';
  		if($u->hasPermission('users')) {
  			$data['users_list'] = $u->getList($u->getCompany());
			$this->loadTemplate('users',$data);
		} else {
			header("Location: ".BASE_URL);
		}
	}

	public function add() {
		$data = array();
	  	$u = new Users();
  		$u->setLoggedUser();
  		$company = new Company($u->getCompany());
  		$data['company_name'] = $company->getName();
  		$data['user_name'] = $u->getName();
  		$data['title'] = 'USUÁRIOS';
  		if($u->hasPermission('users')) {
  			$p = new Permissions();
  			if(isset($_POST['login']) && !empty($_POST['login'])) {
  				$login = addslashes($_POST['login']);
  				$password = addslashes($_POST['password']);
  				$group = addslashes($_POST['group']);
 				$m = $u->add($login,$password,$group,$u->getCompany());
 				if($m=='1'){
				   header("Location: ".BASE_URL.'/users');
				 } else {
				 	$data['erro'] = 'Usuário ja existe';
				 }
			}
  			$data['group_list'] = $p->getGroupList($u->getCompany());
			$this->loadTemplate('users_add',$data);
		} else {
			header("Location: ".BASE_URL);
		}
	}

	public function edit($id) {
		$data = array();
	  	$u = new Users();
  		$u->setLoggedUser();
  		$company = new Company($u->getCompany());
  		$data['company_name'] = $company->getName();
  		$data['user_name'] = $u->getName();
  		$data['title'] = 'USUÁRIOS';
  		if($u->hasPermission('users')) {
  			$p = new Permissions();
  			if(isset($_POST['group']) && !empty($_POST['group'])) {
  				$password = addslashes($_POST['password']);
  				$group = addslashes($_POST['group']);
 				$u->edit($id,$password,$group,$u->getCompany());
				 header("Location: ".BASE_URL.'/users');
			}
			$data['user_info'] = $u->getInfo($id);
  			$data['group_list'] = $p->getGroupList($u->getCompany());
			$this->loadTemplate('users_edit',$data);
		} else {
			header("Location: ".BASE_URL);
		}

	}

	public function delete($id) {
		$data = array();
	  	$u = new Users();
  		$u->setLoggedUser();
  		$company = new Company($u->getCompany());
  		$data['company_name'] = $company->getName();
  		$data['user_name'] = $u->getName();
  		$data['title'] = 'USUÁRIOS';
  		if($u->hasPermission('users')) {
  			$p = new Permissions();
  			$u->delete($id);
			 header("Location: ".BASE_URL.'/users');
		} else {
			header("Location: ".BASE_URL);
		}

	}

}