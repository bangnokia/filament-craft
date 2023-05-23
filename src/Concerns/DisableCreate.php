<?php

trait DisableCreate
{
    public static function canCreate(): bool
    {
        return false;
    }
}
