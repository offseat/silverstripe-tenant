<?php

namespace Offseat\Tenant\Model;

use SilverStripe\ORM\DataObject;

class Workspace extends DataObject
{
    public static string $table_name = 'Tenant';

    public static array $db = [
        'Name' => 'Varchar',
        'Type' => 'Varchar',
        'Firstname' => 'Varchar',
        'Surname' => 'Varchar'
    ];

    private static array $has_one = [
        'Tenant' => 'Tenant'
    ];

    private static array $has_many = [
        'Members' => Member::class,
    ];

    public static array $many_many = [
        'WorkspaceUsers' => WorkspaceUser::class,
    ];
}
