<?php
	echo $this->Html->image($user['config']['logo']);
	echo __('<h1>Bienvenido {0}</h1>', $user['displayname']);
