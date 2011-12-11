<?php
// File: app/Controller/AppController.php
class AppController extends Controller {

	public $components = array(
		'Session',
		'Auth' => array(
			'loginRedirect' => array('controller' => 'posts', 'action' => 'index'),
			'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home')
			'authorize' => array('controller') //Add authrized state
		)
	);

	function beforeFilter() {
		$this->Auth->allow('index', 'view');

	}

	public function isAutherized($user) {
		if(isset($user['role'] && $user['role'] === 'admin') {
			return true; //Adming can access every action
		}
		return false; // The rest don't have access
	}

}
