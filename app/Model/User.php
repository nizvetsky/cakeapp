<?php 

	App::uses('BlowfishPasswordHasher','Controller/Component/Auth');

	class User extends AppModel {
		public $validate = array(
			'username' => 'isUnique',
			'password' => 'notEmpty',
			'role' => array(
				'rule' => array('inList', array('user','admin')),
				'message' => 'Некоректне значення ролі'
			)
		);
	

	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash(
				$this->data[$this->alias]['password']
			);
		}
		return true;
	}
}
 ?>