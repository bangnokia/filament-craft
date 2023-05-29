<?php
namespace Bangnokia\FilamentCraft\Concerns;

trait DisableCreate
{
    public static function canCreate(): bool
    {
        return false;
    }
}
