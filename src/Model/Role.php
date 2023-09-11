<?php

namespace Offseat\Tenant\Model;

use SilverStripe\ORM\DataObject;

class Role extends DataObject
{
    public static string $table_name = 'Tenant';

    public static array $db = [
        'Description' => 'Varchar',
        'Name' => 'Varchar',
    ];

    public static array $many_many = [
        'TenantUsers' => TenantUser::class,
        'Permissions' => Permission::class,
    ];
}
