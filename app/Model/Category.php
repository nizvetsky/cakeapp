<?php

class Category extends AppModel {

	public $hasMany = array(
		'Post' => array(
			'className' => 'Post',
			'dependent' => true
		)
	);

	public $validate = array(
		'title' => 'notEmpty'
	);

}

?>