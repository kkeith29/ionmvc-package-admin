<?php

namespace ionmvc\packages\admin\controllers\admin;

use ionmvc\packages\html\classes\html;

class base extends \ionmvc\classes\controller {

	public function __construct() {
		html::title('Admin');
	}

}

?>