<?php
	declare(strict_types=1);

	use Cake\Routing\Route\DashedRoute;
	use Cake\Routing\RouteBuilder;

	return function (RouteBuilder $routes) {
		$routes->plugin(
			'FawnoAuthenticator',
			['path' => '/auth'],
			function (RouteBuilder $routes) {
				$routes->connect('/', ['controller' => 'Users', 'action' => 'index']);
				/*
				$routes->connect('/login', ['controller' => 'Users', 'action' => 'login']);
				$routes->connect('/logout', ['controller' => 'Users', 'action' => 'logout']);
				$routes->connect('/logout', ['controller' => 'Users']);
				$routes->connect('/listado/{action}/*', ['controller' => 'Listado']);
				*/
				$routes->connect('/{action}', ['controller' => 'Users']);

				$routes->fallbacks();
			}
		);
	};
