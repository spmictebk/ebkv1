<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadmin' => [
            'users' => 'c,r,u,d',
            'ebk' => 'c,r,u,d',
            'ebk1' => 'c,r,u,d',
            'ebk2' => 'c,r,u,d'
        ],
        'admin' => [
            'users' => 'c,r,u,d',
            'ebk' => 'c,r,u,d',
            'ebk1' => 'c,r,u,d',
            'ebk2' => 'c,r,u,d'
        ],
        'pengarah' => [
            'users' => 'c,r,u,d',
            'ebk' => 'c,r,u,d',
            'ebk1' => 'c,r,u,d',
            'ebk2' => 'c,r,u,d'
        ],
        'pp1' => [
            'ebk' => 'c,r,u,d',
            'ebk1' => 'c,r,u,d',
            'ebk2' => 'c,r,u,d'
        ],
        'pp2' => [
            'ebk' => 'c,r,u,d',
            'ebk1' => 'c,r,u,d',
            'ebk2' => 'c,r,u,d'
        ],

        'pyd' => [
            'ebk' => 'c,r,u,d',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
