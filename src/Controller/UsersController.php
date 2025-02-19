<?php
	declare(strict_types=1);

	namespace FawnoAuthenticator\Controller;

	use \Cake\Event\EventInterface;

  class UsersController extends AppController {
		public function beforeFilter (EventInterface $event)	{
			parent::beforeFilter($event);
			$this->Authentication->allowUnauthenticated(['index', 'login', 'logout']);
		}

		public function index () {
			$this->set('title_for_layout', 'Inicio');
		}

		public function info () {
			$identity = isset($this->Authentication) ? $this->Authentication->getIdentity() : false;
			if ($identity) {
				$user = $identity->getOriginalData();
				$this->Flash->info('<code>' . print_r($user, true) . '</code>', ['escape' => false]);
			}
		}

		public function login () {
			$result = $this->Authentication->getResult();

			if (!$result->isValid()) {
				$this->Flash->error('Invalid username or password');
				return $this->redirect('/');
			}

			$target = $this->Authentication->getLoginRedirect() ?? '/';
			return $this->redirect($target);
		}

		public function logout () {
			$this->Authentication->logout();
			return $this->redirect('/');
		}
  }
