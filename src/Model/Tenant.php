<?php

namespace Offseat\Model\Tenant;

use SilverStripe\ORM\DataObject;

class Tenant extends DataObject
{
    public static string $table_name = 'Tenant';

    public static array $db = [
        'Name' => 'Varchar',
    ];

    public static array $many_many = [
        'TenantUser' => TenantUser::class,
    ];
}
