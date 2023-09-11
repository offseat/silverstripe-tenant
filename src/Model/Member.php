<?php

namespace Offseat\Tenant\Model;

use Offseat\Model\Tenant\Tenant;
use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Member as User;

class Member extends DataObject
{
    public static string $table_name = 'Tenant';

    public static array $db = [
        'Name' => 'Varchar',
    ];

    public static array $has_one = [
        'CreatedByUser' => User::class,
        'Tenant' => Tenant::class,
        'Workspace' => Workspace::class,
    ];
}
