<?php
App::uses('AppController', 'Controller');
/**
 * Pages Controller
 *
 * @property Page $Page
 */
class PagesController extends AppController {

	public function display() {
		$path = func_get_args();

                $count = count($path);
                if (!$count) {
                        $this->redirect('/');
                }
                $page = $subpage = $title_for_layout = null;

                if (!empty($path[0])) {
                        $page = $path[0];
                }
                if (!empty($path[1])) {
                        $subpage = $path[1];
                }
                if (!empty($path[$count - 1])) {
                        $title_for_layout = Inflector::humanize($path[$count - 1]);
                }
                $this->set(compact('page', 'subpage', 'title_for_layout'));
                $this->render(implode('/', $path));
	}

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function login() {
		if ($this->Auth->login()) {
			$this->redirect($this->Auth->redirect());
		} else {
			$this->Session->setFlash(__('Invalid username or password, please try again'));
		}
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}

	public function isAuthorized($user) {
                if($this->Auth->user('role') == 'admin') {
                        return true;
                } else {
		$this->redirect($this->Auth->logout());
		}
          	return parent::isAuthorized(); 
        }
}
