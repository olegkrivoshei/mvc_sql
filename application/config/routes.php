<?php

return [

	'' => [
		'controller' => 'main',
		'action' => 'index',
	],

    'admin' => [
        'controller' => 'admin',
        'action' => 'index',
    ],

    'admin/drop/.*?' => [
        'controller' => 'admin',
        'action' => 'drop',
    ],

    'admin/add' => [
        'controller' => 'admin',
        'action' => 'index_add',
    ],

    'admin/addn' => [
        'controller' => 'admin',
        'action' => 'index_add_user',
    ],
    'admin/edit/.*?' => [
        'controller' => 'admin',
        'action' => 'index_edit',
    ],
    'admin/editn' => [
        'controller' => 'admin',
        'action' => 'index_edit_user',
    ],


    'account/login' => [
		'controller' => 'account',
		'action' => 'login',
	],

	'account/register' => [
		'controller' => 'account',
		'action' => 'register',
	],

	
];