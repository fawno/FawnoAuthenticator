<?php
	declare(strict_types=1);

	namespace FawnoAuthenticator\Controller;

	use App\Controller\AppController as BaseController;
	use ArrayObject;
	use Authentication\Controller\Component\AuthenticationComponent;
	use Cake\Core\Configure;
	use Cake\Event\EventInterface;

	class AuthenticatorController extends BaseController {
		protected AuthenticationComponent $Authentication;

		public function beforeFilter(EventInterface $event) {
			parent::beforeFilter($event);

			$auth = $event->getData('auth');
			$user = $this->getUser();
			$this->set(compact(['user', 'auth']));

			if (!$this->isAuthorized($user, $auth)) {
				$this->Flash->error(__('You are not authorized to access that location.'));
				return $this->redirect('/');
			}
		}

		public function initialize () : void {
			parent::initialize();

			$this->loadComponent('Flash');
			$this->Authentication = $this->loadComponent('Authentication.Authentication');
		}

		public function getUser () {
			$user = Configure::read('auth.user_defaults', [
				'username' => 'anonymous',
				'displayname' => 'Anónimo',
				'memberof' => [],
			]);

			$result = $this->Authentication->getResult();
			if ($result->isValid()) {
				$identity = $this->Authentication->getIdentity();
				$this->set('identity', $identity->getOriginalData());
				$user = ((array) $identity->getOriginalData()) + $user;
			}

			return $user;
		}

		public function isAuthorized (ArrayObject|array $user, ?array $auth = []) : bool {
			if ($this->plugin == 'FawnoAuthenticator') {
				return true;
			}

			if (empty($auth)) {
				return false;
			}

			$action = $this->request->getParam('action');

			$auth_ou = $auth['all'] ?? [];
			$auth_ou = array_merge($auth_ou, $auth['controller'][$this->name] ?? []);
			$auth_ou = array_merge($auth_ou, $auth['action'][$this->name][$action] ?? []);

			return !empty(array_intersect($user['memberof'], $auth_ou));
		}
	}
