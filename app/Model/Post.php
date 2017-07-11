<?php

    class Post extends AppModel {

        public $belongsTo = 'Category';

    	public $validate = array(

    		'title' => 'notEmpty',
    		'body' => 'notEmpty',
    		'name' => 'notEmpty',
    		'text' => 'notEmpty'
    	);
    }

?>