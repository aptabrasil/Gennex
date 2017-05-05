<?php
/**
* 
*/
class Permissions extends model
{
	private $group;
	private $permissions;

	public function setGroup($id,$id_company) {
		$this->group = $id;
		$this->permissions =array();
		$sql = $this->db->prepare('SELECT * FROM permission_group WHERE id=:id and id_company=:id_company');
		$sql->bindValue(':id',$id);
		$sql->bindValue(':id_company',$id_company);
		$sql->execute();
		if($sql->rowCount() > 0) {
			$row = $sql->fetch();
			if(empty($row['params'])) {
				$row['params'] = '-1';
			}
			$param = $row{'params'};
			$sql = $this->db->prepare('SELECT name FROM permission_param where id in ('.$param.') and id_company=:id_company');
			$sql->bindValue(':id_company',$id_company);
			$sql->execute();
			if($sql->rowCount() > 0) {
				foreach ($sql->fetchAll() as $item) {
					$this->permissions[] = $item['name'];
				}
			}
		}

	}

	public function hasPermission($name) {
		if(in_array($name, $this->permissions)) {
			return true;
		} else {
			return false;
		}

	}

	public function getList($id_company) {
		$array = array();
		$sql = $this->db->prepare('SELECT * FROM permission_param where id_company=:id_company');
		$sql->bindValue(':id_company',$id_company);
		$sql->execute();
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
		return $array;

	}

	public function getGroupList($id_company) {
		$array = array();
		$sql = $this->db->prepare('SELECT * FROM permission_group where id_company=:id_company');
		$sql->bindValue(':id_company',$id_company);
		$sql->execute();
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
		return $array;

	}

	public function getGroup($id) {
		$array = array();
		$sql = $this->db->prepare('SELECT * FROM permission_group where id=:id');
		$sql->bindValue(':id',$id);
		$sql->execute();
		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
			$array['params'] = explode(',', $array['params']);
		}
		return $array;

	}

	public function delete($id) {
		$sql = $this->db->prepare('DELETE FROM permission_param WHERE id=:id');
		$sql->bindValue(':id',$id);
		$sql->execute();
	}

	public function deleteGroup($id) {
		$u = new Users();
		if($u->findUsersinGroup($id) == false) {
			$sql = $this->db->prepare('DELETE FROM permission_group where id=:id');
			$sql->bindValue(':id',$id);
			$sql->execute();
			if($sql->rowCount() > 0) {
				$array = $sql->fetchAll();
			}
		}

	}

	public function addGroup($pname,$plist,$id_company) {
		$params = implode(',', $plist);
		$sql = $this->db->prepare('INSERT INTO permission_group SET name = :name, id_company=:id_company, params=:params');
		$sql->bindValue(':name',$pname);
		$sql->bindValue(':id_company',$id_company);
		$sql->bindValue(':params',$params);
		$sql->execute();
	}

	public function editGroup($id,$pname,$plist,$id_company) {
		$params = implode(',', $plist);
		$sql = $this->db->prepare('UPDATE permission_group SET name = :name, id_company=:id_company, params=:params WHERE id=:id');
		$sql->bindValue(':id',$id);
		$sql->bindValue(':name',$pname);
		$sql->bindValue(':id_company',$id_company);
		$sql->bindValue(':params',$params);
		$sql->execute();
		
	}

}
