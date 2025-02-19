<?php
	declare(strict_types=1);

	namespace FawnoAuthenticator;

	use Authentication\AuthenticationService;
	use Authentication\AuthenticationServiceInterface;
	use Authentication\AuthenticationServiceProviderInterface;
	use Authentication\Middleware\AuthenticationMiddleware;
	use Cake\Core\BasePlugin;
	use Cake\Core\ContainerInterface;
	use Cake\Core\PluginApplicationInterface;
	use Cake\Http\MiddlewareQueue;
	use Cake\Routing\RouteBuilder;
	use Cake\Console\CommandCollection;
	use Cake\Core\Configure;
	use Cake\Core\Plugin as CorePlugin;
	use Cake\Routing\Router;
	use FawnoAuthenticator\Authenticator\IPAuthenticator;
	use FawnoAuthenticator\Authenticator\NTLMAuthenticator;
	use Psr\Http\Message\ServerRequestInterface;

	/**
	 * Plugin for Face
	 */
	class Plugin extends BasePlugin implements AuthenticationServiceProviderInterface {
		/**
		 * Load all the plugin configuration and bootstrap logic.
		 *
		 * The host application is provided as an argument. This allows you to load
		 * additional plugin dependencies, or attach events.
		 *
		 * @param \Cake\Core\PluginApplicationInterface $app The host application
		 * @return void
		 */
		public function bootstrap (PluginApplicationInterface $app) : void {
			parent::bootstrap($app);

			if (!CorePlugin::isLoaded('Authentication')) {
				$app->addPlugin('Authentication');
			}

			if (!CorePlugin::isLoaded('Bootstrap')) {
				$app->addPlugin('Bootstrap');
			}
		}

		/**
		 * Add middleware for the plugin.
		 *
		 * @param \Cake\Http\MiddlewareQueue $middlewareQueue The middleware queue to update.
		 * @return \Cake\Http\MiddlewareQueue
		 */
		public function middleware (MiddlewareQueue $middlewareQueue) : MiddlewareQueue {
			// Add your middlewares here
			parent::middleware($middlewareQueue);

			// Add the AuthenticationMiddleware. It should be
			// after routing and body parser.
			$middlewareQueue->add(new AuthenticationMiddleware($this));

			return $middlewareQueue;
		}

		/**
		 * Add commands for the plugin.
		 *
		 * @param \Cake\Console\CommandCollection $commands The command collection to update.
		 * @return \Cake\Console\CommandCollection
		 */
		public function console(CommandCollection $commands) : CommandCollection {
			// Add your commands here

			$commands = parent::console($commands);

			return $commands;
		}

		/**
		 * Returns a service provider instance.
		 *
		 * @param \Psr\Http\Message\ServerRequestInterface $request Request
		 * @return \Authentication\AuthenticationServiceInterface
		 */
		public function getAuthenticationService(ServerRequestInterface $request) : AuthenticationServiceInterface {
			$service = new AuthenticationService();

			// Define where users should be redirected to when they are not authenticated
			$service->setConfig([
				'unauthenticatedRedirect' => Router::url([
					'prefix' => false,
					'plugin' => 'FawnoAuthenticator',
					'controller' => 'Users',
					'action' => 'login',
				]),
				'queryParam' => 'redirect',
			]);

			// Load the authenticators. Session should be first.
			$service->loadAuthenticator('Authentication.Session');

			//debug($this);
			$service->loadAuthenticator(IPAuthenticator::class, [
				'auth' => Configure::read('auth.ip'),
			]);

			$service->loadAuthenticator(NTLMAuthenticator::class, [
				'domains' => Configure::read('auth.ntlm'),
			]);

			return $service;
		}

		/**
		 * Register application container services.
		 *
		 * @param \Cake\Core\ContainerInterface $container The Container to update.
		 * @return void
		 * @link https://book.cakephp.org/4/en/development/dependency-injection.html#dependency-injection
		 */
		public function services(ContainerInterface $container) : void {
			// Add your services here
		}
	}
