<?php
	declare(strict_types=1);

	namespace FawnoAuthenticator\Controller;

	use FawnoAuthenticator\Controller\AuthenticatorController;
	use FawnoAuthenticator\View\AppView;

	class AppController extends AuthenticatorController {
		public function initialize () : void {
			parent::initialize();

			$this->viewBuilder()->setClassName(AppView::class);
		}
	}
