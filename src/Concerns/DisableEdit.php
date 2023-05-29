<?php

namespace Bangnokia\FilamentCraft\Concerns;

use Illuminate\Database\Eloquent\Model;

trait DisableEdit
{
    public static function canEdit(Model $record): bool
    {
        return false;
    }
}
