<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Base Hero Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during Hero for
    | various messages that we need to display to the user.
    |
    */

    'panel_name' => 'Administrator (Hero)',

    'description' => 'A powerful and intuitive admin panel for managing your application with ease and efficiency.',

    'sections' => [
        'content' => [
            'name' => 'Content',
            'title' => 'Content Management',
            'menus' => [
                'group_product' => 'Product and Service',
            ]
        ],
        'sell' => [
            'name' => 'Sell',
            'title' => 'Sell Management',
            'menus' => [
                'group_sell' => 'Sell',
                'group_advertising_and_marketing' => 'Advertising and Marketing',
                'group_financial_management' => 'Financial Management',
            ]
        ],
        'account' => [
            'name' => 'Accounts',
            'title' => 'Accounts',
            'menus' => [
                'group_customer' => 'Customers',
                'department' => 'Departments',
            ]
        ],
        'system' => [
            'name' => 'System',
            'title' => 'System Management',
            'menus' => [
                'language' => 'Languages',
                'group_plugins_and_modules' => 'Plugins and Modules',
            ],
        ],
        'report' => [
            'name' => 'Reports',
            'title' => 'Management Reports',
        ],
    ],

    'dashboard' => [
        'title' => 'Administrator Dashboard (Hero)',
        'tiles' => [
            'users' => 'Users',
            'roles' => 'Roles',
            'media' => 'Media',
            'logs' => 'Logs',
            'activity' => 'Activity',
            'settings' => 'Settings',
        ],
    ],

    'taxonomy_type' => [
        'department' => [
            'label' => 'Departments',
            'description' => 'Departments',
            'translation' => [
                'name' => [
                    'label' => 'Name',
                    'info' => 'Department name',
                    'placeholder' => 'Enter department name',
                ],
                'description' => [
                    'label' => 'Description',
                    'info' => 'Department description',
                    'placeholder' => 'Enter department description',
                ],
            ],
        ],
    ],

];
