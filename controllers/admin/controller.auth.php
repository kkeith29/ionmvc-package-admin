<?php

namespace ionmvc\packages\admin\controllers\admin;

use ionmvc\classes\view;
use ionmvc\packages\asset\classes\asset;
use ionmvc\packages\form\classes\form;

class auth extends base {

	public function __construct() {
		parent::__construct();
	}

	public function login_action() {
		$form = new form;
		
		
		asset::add('admin/root.css');
		view::fetch('admin/login',[
			'form' => $form
		]);
	}

	public function forgot_password_action() {
		$form = new form;
		
		view::fetch('admin/forgot_password',[
			
		]);
	}

}

?>