<?php
namespace Bangnokia\FilamentCraft;

trait DisableCreate
{
    public static function canCreate(): bool
    {
        return false;
    }
}
