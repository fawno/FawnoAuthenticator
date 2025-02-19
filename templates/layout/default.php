<!DOCTYPE html>
<?php
	echo $this->Html->tag('html');
	echo $this->Html->tag('head');

	echo $this->Html->charset();
	echo $this->Html->meta('favicon.png', '/img/favicon.png', ['type' => 'icon']);
	echo $this->Html->tag('title', 'GN Web Apps -' . $this->name . ': ' . $this->fetch('title'));
	echo $this->Html->meta('viewport', 'width=device-width, initial-scale=1.0');
	echo $this->Html->meta('description', 'Grupo Noticias Web Apps');
	echo $this->Html->meta('author', 'Fernando Herrero, 2022');
	echo $this->Html->meta('icon');

	echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css', ['integrity' => 'sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.14.0/jquery.timepicker.min.css', ['integrity' => 'sha512-WlaNl0+Upj44uL9cq9cgIWSobsjEOD1H7GK1Ny1gmwl43sO0QAUxVpvX2x+5iQz/C60J3+bM7V07aC/CNWt/Yw==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker3.min.css', ['integrity' => 'sha512-aQb0/doxDGrw/OC7drNaJQkIKFu6eSWnVMAwPN64p6sZKeJ4QCDYL42Rumw2ZtL8DB9f66q4CnLIUnAw28dEbg==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	//echo $this->Html->css('https://evoluteur.github.io/colorpicker/css/evol-colorpicker.min.css');
	echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css', ['integrity' => 'sha512-6MXa8B6uaO18Hid6blRMetEIoPqHf7Ux1tnyIQdpt9qI5OACx7C+O3IVTr98vwGnlcg0LOLa02i9Y1HpVhlfiw==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	//echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css', ['integrity' => 'sha512-tqup5t5XyJXlvX8b/E9pI0swGA4AugszFqvdWASa2/484oj4HW7UaXKwRmnMLKFp3ZWeTwjjCh6J40AvdUQhrA==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css', ['integrity' => 'sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	//echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css', ['integrity' => 'sha512-KulI0psuJQK8UMpOeiMLDXJtGOZEBm8RZNTyBBHIWqoXoPMFcw+L5AEo0YMpsW8BfiuWrdD1rH6GWGgQBF59Lg==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css', ['integrity' => 'sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	//echo $this->Html->css('https://fonts.googleapis.com/css?family=Work+Sans:400,700');
	echo $this->Html->css('fawno');
	echo $this->Html->css('fawno-print');

	echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js', ['integrity' => 'sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js', ['integrity' => 'sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.14.0/jquery.timepicker.min.js', ['integrity' => 'sha512-s0SB4i9ezk9SRyV1Glrj/w5xS5ExSxXiN44fQeV9GYOtExbVWnC+mUsUyZdIYv6qXL0xe1qvpe0h1kk56gsgaA==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js', ['integrity' => 'sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/locales/bootstrap-datepicker.es.min.js', ['integrity' => 'sha512-5pjEAV8mgR98bRTcqwZ3An0MYSOleV04mwwYj2yw+7PBhFVf/0KcE+NEox0XrFiU5+x5t5qidmo5MgBkDD9hEw==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	//echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/locales/bootstrap-datepicker.eu.min.js', ['integrity' => 'sha512-l2lx+4RlGSjn87/NkRhy7o5fnMuE9c8HS5AgDORxUf/pII6lDtkFhoj40Pex5eOp9Hx+z7biGrUbg9RsBDcaGQ==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	//echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/locales/bootstrap-datepicker.fr.min.js', ['integrity' => 'sha512-fx3aztaUjb4NyoD+Tso5g7R1l29bU3jnnTfNRKBiY9fdQOHzVhKJ10wEAgQ1zM/WXCzB9bnVryHD1M40775Tsw==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	//echo $this->Html->script('https://evoluteur.github.io/colorpicker/js/evol-colorpicker.min.js');
	echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js', ['integrity' => 'sha512-iztkobsvnjKfAtTNdHkGVjAYTrrtlC7mGp/54c40wowO7LhURYl3gVzzcEqGl/qKXQltJ2HwMrdLcNUdo+N/RQ==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js', ['integrity' => 'sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/i18n/defaults-es_ES.min.js', ['integrity' => 'sha512-RN/dgJo36dNkKVnb1XGzePP4/8XGa/r+On4XYUy8I1C5z+9SsIEU2rFh6TrunAnddKwtXwMdI0Se8HZxd0GtiQ==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	//echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/i18n/defaults-eu.min.js', ['integrity' => 'sha512-IFAXAEKzyFSEviwS16Hcw/yRYUlR/YDn5GvBJhGLqaIVLJOEfi1Ds2Aa9OxKDebFUrwMB9wc9vdIhavuEcaVAQ==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	//echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/i18n/defaults-fr_FR.min.js', ['integrity' => 'sha512-JY5zTwqC7qrhwg2nwAZr8WNWCKk2s2Gbap74Z/6z+s7XGQ0ngoNkkXPRgZl7WtwVWRCYYXMmHLAZxMqkGoinzg==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	//echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.min.js', ['integrity' => 'sha512-HfRdzrvve5p31VKjxBhIaDhBqreRXt4SX3i3Iv7bhuoeJY47gJtFTRWKUpjk8RUkLtKZUhf87ONcKONAROhvIw==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);
	//echo $this->Html->script('https://creativecouple.github.io/jquery-timing/jquery-timing.min.js');
	//echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js', ['integrity' => 'sha512-7O5pXpc0oCRrxk8RUfDYFgn0nO1t+jLuIOQdOMRp4APB7uZ4vSjspzp5y6YDtDs4VzUSTbWzBFZ/LKJhnyFOKw==', 'crossorigin' => 'anonymous', 'referrerpolicy' => 'no-referrer']);

	echo $this->Html->script('jquery-timing.min.js');

	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');

	/*
	$action = $this->request->getParam('action');
	#navbar li.dropdown[controller="<?php echo $this->name; ?>"][action="<?php echo $action; ?>"] { color: #555; background-color: #E7E7E7; background-image: unset; }
	*/
?>
<style>
<?php if (!empty($nomenu)) { ?>
	body { padding-top: 10px; }
<?php	} ?>
	#navbar li.dropdown[plugin="<?php echo $this->plugin; ?>"][controller=""][action=""] { color: #555; background-color: #E7E7E7; background-image: unset; }
	#navbar li.dropdown[plugin="<?php echo $this->plugin; ?>"][controller="<?php echo $this->name; ?>"][action=""] { color: #F55; background-color: #E7E7E7; background-image: unset; }
	#OLD_navbar li.dropdown[controller="<?php echo $this->name; ?>"][action=""] { color: #555; background-color: #E7E7E7; background-image: unset; }
</style>
<script>
	$(function() {
		//$('body > nav li[class="active"]:not([controller="<?php echo $this->name; ?>"])').removeClass('active');
		$('.modal').on('shown.bs.modal', function (event) {
			var minWidth = $(this).attr('min-width');
			if (minWidth == undefined) {
				var minWidth = $(this).find('.modal-content').outerWidth();
				$(this).attr('min-width', minWidth);
				$(this).find('.modal-content').resizable('option', 'minWidth', minWidth);
			}

			var minHeight = $(this).attr('min-height');
			if (minHeight == undefined) {
				var minHeight = $(this).find('.modal-content').outerHeight();
				$(this).attr('min-height', minHeight);
				$(this).find('.modal-content').resizable('option', 'minHeight', minHeight);
			}
		});

		$('.modal-content').draggable({ handle: '.modal-header', opacity: 0.8 });
		$('.modal-content').resizable({ handles: 'all' });
	});
</script>
<?php
	echo $this->Html->tag('/head');
	echo $this->Html->tag('body');

	// Fix memberof
	$user['memberof'] = $user['memberof'] ?? [];
	if (empty($nomenu)) {
		$params = empty($this->request->getParam('pass')) ? [] : $this->request->getParam('pass');

		echo $this->Navbar->create($this->Html->image('gn.png', ['class' => 'navbar-header-logo']), ['fixed' => 'top', 'responsive' => true, 'role' => 'navigation']) ;
		echo $this->Navbar->beginMenu();

		echo $this->Navbar->link($this->Html->icon('home'), '/', ['plugin' => null, 'controller' => 'Arcano', 'action' => 'index']);
		echo $this->Navbar->link($this->Html->icon('barcode'), ['plugin' => null, 'controller' => 'issn', 'action' => 'index'], ['plugin' => null, 'controller' => 'ISSN', 'action' => 'index'], ['escape' => false]);
		echo $this->Navbar->link(__('Rotativa'), ['plugin' => null, 'controller' => 'rotativa', 'action' => 'index'], ['plugin' => null, 'controller' => 'Rotativa', 'action' => 'index'], ['escape' => false]);
		echo $this->Navbar->link('FACe', ['plugin' => 'Face', 'controller' => 'listado', 'action' => 'index'], ['plugin' => 'Face', 'controller' => 'Listado', 'action' => 'index'], ['escape' => false]);

		//echo $this->Navbar->link(__('Importar'), ['controller' => 'Importer', 'action' => 'import'], ['controller' => 'Importer', 'action' => 'import']);
		//echo $this->Navbar->link(__('Importador'), ['plugin' => 'MilImp', 'controller' => 'Importer'], ['plugin' => 'MilImp', 'controller' => 'Importer', 'action' => 'index']);
		if ($this->Identity->isLoggedIn()) {
			if (array_intersect($user['memberof'], ['Sistemas', 'Administradores'])) {
				echo $this->Navbar->link('Mantenimiento', ['plugin' => 'Mantenimiento', 'controller' => 'app'], ['plugin' => 'Mantenimiento', 'controller' => '', 'action' => '']);
			}

			echo $this->Navbar->beginMenu('Milenium', ['plugin' => 'Milenium', 'controller' => 'app'], ['plugin' => 'Milenium', 'controller' => '', 'action' => '']);
			if (array_intersect($user['memberof'], ['Sistemas', 'Administradores'])) {
				echo $this->Navbar->link('Publicaciones', ['plugin' => 'Milenium', 'controller' => 'publicaciones'], ['plugin' => 'Milenium', 'controller' => 'publicaciones'], ['escape' => false]);
				echo $this->Navbar->link('Planillos', ['plugin' => 'Milenium', 'controller' => 'planillos'], ['plugin' => 'Milenium', 'controller' => 'planillos'], ['escape' => false]);
				echo $this->Navbar->link('Licencias', ['plugin' => 'Milenium', 'controller' => 'licencias'], ['plugin' => 'Milenium', 'controller' => 'licencias'], ['escape' => false]);
				echo $this->Navbar->link('Verlic', ['plugin' => 'Milenium', 'controller' => 'verlic'], ['plugin' => 'Milenium', 'controller' => 'verlic'], ['escape' => false]);
				echo $this->Navbar->link('Uso licencias', ['plugin' => 'Milenium', 'controller' => 'licuse'], ['plugin' => 'Milenium', 'controller' => 'licuse'], ['escape' => false]);
			}
			echo $this->Navbar->endMenu();

			if (array_intersect($user['memberof'], ['RedPrint Impomaq'])) {
				echo $this->Navbar->beginMenu('Producción', ['plugin' => 'Produccion', 'controller' => 'LastPag'], ['plugin' => 'Produccion', 'controller' => 'LastPag']);
				echo $this->Navbar->link('LastPag', ['plugin' => 'Produccion', 'controller' => 'LastPag'], ['plugin' => 'Produccion', 'controller' => 'LastPag'], ['escape' => false]);
				echo $this->Navbar->link('Estilos de impresión', ['plugin' => 'Produccion', 'controller' => 'PrintStyles'], ['plugin' => 'Produccion', 'controller' => 'PrintStyles'], ['escape' => false]);
				echo $this->Navbar->link('Publicaciones', ['plugin' => 'Produccion', 'controller' => 'Publications'], ['plugin' => 'Produccion', 'controller' => 'Publications'], ['escape' => false]);
				echo $this->Navbar->endMenu();
			}

			//if (array_intersect($user['memberof'], ['Sistemas', 'Administradores', 'Personal', 'Gerencia'])) {
				echo $this->Navbar->beginMenu('Accesos', ['plugin' => 'ZKTeco', 'controller' => 'App'], ['plugin' => 'ZKTeco', 'controller' => 'App', 'action' => 'index']);
				echo $this->Navbar->link('Informes', ['plugin' => 'ZKTeco', 'controller' => 'App', 'action' => 'report'], ['plugin' => 'ZKTeco', 'controller' => 'App', 'action' => 'report'], ['escape' => false]);
				echo $this->Navbar->endMenu();
			//}

			if (array_intersect($user['memberof'], ['Sistemas', 'Administradores'])) {
				echo $this->Navbar->beginMenu('Sistemas', ['plugin' => null, 'controller' => 'sistemas'], ['controller' => 'Sistemas', 'action' => '']);
				//echo $this->Navbar->link('Arcano', ['controller' => 'sistemas', 'action' => 'jobs'], ['controller' => 'Sistemas', 'action' => 'jobs'], ['escape' => false]);
				//echo $this->Navbar->link('LastPag', ['controller' => 'sistemas', 'action' => 'lastpag'], ['controller' => 'Sistemas', 'action' => 'lastpag'], ['escape' => false]);
				//echo $this->Navbar->link('VerLic', ['controller' => 'sistemas', 'action' => 'verlic'], ['controller' => 'Sistemas', 'action' => 'verlic'], ['escape' => false]);
				//echo $this->Navbar->link('Licencias Milenium', ['controller' => 'sistemas', 'action' => 'licencias'], ['controller' => 'Sistemas', 'action' => 'licencias'], ['escape' => false]);
				echo $this->Navbar->link('Licencias Archivo', ['plugin' => null, 'controller' => 'sistemas', 'action' => 'archivo'], ['controller' => 'Sistemas', 'action' => 'archivo'], ['escape' => false]);
				//echo $this->Navbar->link('Listado Publicaciones Milenium', ['controller' => 'sistemas', 'action' => 'publicaciones'], ['controller' => 'Sistemas', 'action' => 'publicaciones'], ['escape' => false]);
				//echo $this->Navbar->link('Usuarios Milenium', ['controller' => 'sistemas', 'action' => 'usuarios_milenium'], ['controller' => 'Sistemas', 'action' => 'usuarios_milenium'], ['escape' => false]);
				//echo $this->Navbar->link('Amazon', ['controller' => 'sistemas', 'action' => 'amazon'], ['controller' => 'Sistemas', 'action' => 'amazon'], ['escape' => false]);
				echo $this->Navbar->link('PHP Info', ['plugin' => null, 'controller' => '/', 'action' => 'info'], ['controller' => 'App', 'action' => 'info'], ['escape' => false]);
				echo $this->Navbar->endMenu();
			}
		} else {
			echo $this->Navbar->link('Milenium', ['plugin' => null, 'controller' => 'milenium'], ['controller' => 'Milenium', 'action' => 'index'], ['escape' => false]);
			echo $this->Navbar->link('Sistemas', ['plugin' => null, 'controller' => 'sistemas'], ['controller' => 'Sistemas', 'action' => 'index'], ['escape' => false]);
		}

		echo $this->Navbar->endMenu();
			echo $this->Navbar->beginMenu(['class' => 'navbar-right']);
				//echo $this->Navbar->link('PHP Info', ['controller' => '/', 'action' => 'info'], ['controller' => 'App', 'action' => 'info'], ['escape' => false]);
				if ($this->Identity->isLoggedIn()) {
					echo $this->Navbar->link($this->Html->icon('user'), ['plugin' => null, 'controller' => 'users', 'action' => 'info'], ['controller' => 'Users', 'action' => 'info'], ['escape' => false]);
					echo $this->Navbar->link($this->Html->icon('power-off', ['font' => 'fa']), ['plugin' => null, 'controller' => '/', 'action' => 'logout'], ['controller' => 'Users', 'action' => 'logout'], ['escape' => false]);
				} else {
					echo $this->Navbar->link($this->Html->icon('plug', ['font' => 'fa']), ['plugin' => null, 'controller' => '/', 'action' => 'login'], ['controller' => 'Users', 'action' => 'login'], ['escape' => false]);
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
