<?php
  declare(strict_types=1);

	use Cake\Core\Configure;
	use Cake\Datasource\ConnectionManager;
	use Cake\Log\Log;

	try {
		Configure::load('auth', 'default', true);
	} catch (\Exception $e) {
		Log::warning($e->getMessage());

		try {
			Configure::load('FawnoAuthenticator.auth', 'default', true);
		} catch (\Exception $e) {
			Log::warning($e->getMessage());
		}
	}
