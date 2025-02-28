<?php
	declare(strict_types=1);

	use Cake\Routing\Route\DashedRoute;
	use Cake\Routing\RouteBuilder;

	return function (RouteBuilder $routes) {
		$routes->plugin(
			'FawnoAuthenticator',
			['path' => '/auth'],
			function (RouteBuilder $routes) {
				$routes->connect('/', ['plugin' => 'FawnoAuthenticator', 'controller' => 'Users', 'action' => 'index']);
				$routes->connect('/{action}', ['plugin' => 'FawnoAuthenticator', 'controller' => 'Users']);

				$routes->fallbacks();
			}
		);

		$routes->connect('/login/*', ['plugin' => 'FawnoAuthenticator', 'controller' => 'Users', 'action' => 'login']);
		$routes->connect('/logout/*', ['plugin' => 'FawnoAuthenticator', 'controller' => 'Users', 'action' => 'logout']);
	};
