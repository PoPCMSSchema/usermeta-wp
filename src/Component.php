<?php

declare(strict_types=1);

namespace PoPSchema\UserMetaWP;

use PoP\Root\Component\AbstractComponent;

/**
 * Initialize component
 */
class Component extends AbstractComponent
{
    // const VERSION = '0.1.0';

    public static function getDependedComponentClasses(): array
    {
        return [
            \PoPSchema\UserMeta\Component::class,
            \PoPSchema\UsersWP\Component::class,
        ];
    }

    public static function getDependedMigrationPlugins(): array
    {
        return [
            'migrate-usermeta-wp',
        ];
    }
}
