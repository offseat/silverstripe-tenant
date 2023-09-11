<?php

namespace Offseat\Tenant\Model;

use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Member as User;

class WorkspaceUser extends DataObject
{
    public static string $table_name = 'Tenant';

    public static array $db = [
        'Name' => 'Varchar',
    ];

    public static array $has_one = [
        'User' => User::class,
    ];

    private static $belongs_to_many = [
        'Workspace' => Workspace::class,
    ];
}
