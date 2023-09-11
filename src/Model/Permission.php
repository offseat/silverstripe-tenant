<?php

namespace Offseat\Tenant\Model;

use SilverStripe\ORM\DataObject;

class Permission extends DataObject
{
    public static string $table_name = 'Tenant';

    public static array $db = [
        'Access' => 'Varchar',
        'Action' => 'Varchar',
        'Description' => 'Varchar',
        'Entity' => 'Varchar',
    ];

    private static array $belongs_many_many = [
        'Roles' => Role::class,
    ];
}
