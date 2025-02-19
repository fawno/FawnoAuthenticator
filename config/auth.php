<?php
	declare(strict_types=1);

	return [
		'auth' => [
			'user_defaults' => [
				'username' => 'anonymous',
				'displayname' => 'Anónimo',
				'memberof' => [
					'Anonymous' => 'Anonymous',
				],
				'config' => [
					// Other data
				],
			],
			'ip' => [
				'127.0.0.1' => [
					'username' => 'localhost',
					'displayname' => 'Local Host',
					'memberof' => [
						'Anonymous' => 'Anonymous',
					],
					'config' => [
						// Other data
					],
				],
			],
			'ntlm' => [
				'example' => [
					'ldap' => [
						'srv' => 'ldap-srv',
						'user' => 'ldap-usr',
						'pass' => 'ldap-pass',
						'dn' => 'OU=Departaments, DC=example, DC=com',
						'dn_users' => 'CN=Users, DC=example, DC=com',
					],
					'config' => [
						// Other data
					],
				],
			],
		],
	];
