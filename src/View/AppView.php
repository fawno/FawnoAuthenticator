<?php
	declare(strict_types=1);

	namespace FawnoAuthenticator\View;

	use Cake\View\View;
	class AppView extends View {
		public function initialize(): void {
			parent::initialize();

			$this->loadHelper('Html', [
				'className' => 'Bootstrap.Html',
			]);
			$this->loadHelper('Form', [
				'className' => 'Bootstrap.Form',
				'useCustomFileInput' => true,
			]);
			$this->loadHelper('Paginator', [
				'className' => 'Bootstrap.Paginator',
			]);
			$this->loadHelper('Modal', [
				'className' => 'Bootstrap.Modal',
			]);
			$this->loadHelper('Flash', [
				'className' => 'Bootstrap.Flash',
			]);
			$this->loadHelper('Navbar', [
				'className' => 'Bootstrap.Navbar',
			]);
			$this->loadHelper('Panel', [
				'className' => 'Bootstrap.Panel',
			]);
			$this->loadHelper('Table', [
				'className' => 'DataTables.Table',
			]);
			$this->loadHelper('Authentication.Identity');
		}
	}
