<?php

namespace Offseat\Tenant\Model;

use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Member as User;

class TenantUser extends DataObject
{
    public static string $table_name = 'TenantUser';

    public static array $db = [
        'Joined' => "Enum('Creator, Invitation, Link, PublicURL')",
        'Status' => "Enum('PendingInvitation, PendingAcceptance, Active, Inactive')",
    ];

    public static array $has_one = [
        'User' => User::class,
    ];

    public static array $belongs_many_many = [
        'Tenant' => Tenant::class,
    ];
}
