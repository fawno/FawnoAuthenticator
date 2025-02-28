<!DOCTYPE html>
<?php
	echo $this->Html->tag('html');
	echo $this->Html->tag('head');

	echo $this->Html->charset();
	echo $this->Html->meta('favicon.png', '/img/favicon.png', ['type' => 'icon']);
	echo $this->Html->tag('title', $this->fetch('title'));
	echo $this->Html->meta('viewport', 'width=device-width, initial-scale=1.0');
	echo $this->Html->meta('icon');

	echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css', ['integrity' => 'sha512-6MXa8B6uaO18Hid6blRMetEIoPqHf7Ux1tnyIQdpt9qI5OACx7C+O3IVTr98vwGnlcg0LOLa02i9Y1HpVhlfiw==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css', ['integrity' => 'sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	echo $this->Html->css('fawno');
	echo $this->Html->css('fawno-print');

	echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js', ['integrity' => 'sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js', ['integrity' => 'sha512-iztkobsvnjKfAtTNdHkGVjAYTrrtlC7mGp/54c40wowO7LhURYl3gVzzcEqGl/qKXQltJ2HwMrdLcNUdo+N/RQ==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);

	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
?>
<style>
<?php if (!empty($nomenu)) { ?>
	body { padding-top: 10px; }
<?php	} ?>
	#navbar li.dropdown[plugin="<?php echo $this->plugin; ?>"][controller=""][action=""] { color: #555; background-color: #E7E7E7; background-image: unset; }
	#navbar li.dropdown[plugin="<?php echo $this->plugin; ?>"][controller="<?php echo $this->name; ?>"][action=""] { color: #F55; background-color: #E7E7E7; background-image: unset; }
</style>
<?php
	echo $this->Html->tag('/head');
	echo $this->Html->tag('body');

	// Fix memberof
	$user['memberof'] = $user['memberof'] ?? [];

	if (empty($nomenu)) {
		$params = empty($this->request->getParam('pass')) ? [] : $this->request->getParam('pass');

		echo $this->Navbar->create('', ['fixed' => 'top', 'responsive' => true, 'role' => 'navigation']) ;
		echo $this->Navbar->beginMenu();

		echo $this->Navbar->link($this->Html->icon('home'), '/', ['plugin' => null, 'controller' => '/']);

		echo $this->Navbar->endMenu();
			echo $this->Navbar->beginMenu(['class' => 'navbar-right']);
				if ($this->Identity->isLoggedIn()) {
					echo $this->Navbar->link($this->Html->icon('user'), ['plugin' => 'FawnoAuthenticator', 'controller' => 'users', 'action' => 'info'], ['plugin' => 'FawnoAuthenticator', 'controller' => 'Users', 'action' => 'info'], ['escape' => false]);
					echo $this->Navbar->link($this->Html->icon('power-off', ['font' => 'fa']), ['plugin' => 'FawnoAuthenticator', 'controller' => 'Users', 'action' => 'logout'], ['plugin' => 'FawnoAuthenticator', 'controller' => 'Users', 'action' => 'logout'], ['escape' => false]);
				} else {
					echo $this->Navbar->link($this->Html->icon('plug', ['font' => 'fa']), ['plugin' => 'FawnoAuthenticator', 'controller' => 'Users', 'action' => 'login'], ['plugin' => 'FawnoAuthenticator', 'controller' => 'Users', 'action' => 'login'], ['escape' => false]);
				}
			echo $this->Navbar->endMenu();
		echo $this->Navbar->end() ;
	}

	echo $this->Html->div(isset($wide_container) ? 'container container-wide' : 'container');
	echo $this->Flash->render();
	echo $this->fetch('content');
	echo $this->Html->tag('/div');

	echo $this->Html->tag('/body');
	echo $this->Html->tag('/html');
