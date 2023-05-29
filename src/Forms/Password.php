<?php

namespace Bangnokia\FilamentCraft\Forms;

use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Hash;

class Password extends TextInput
{
    protected function setUp(): void
    {
        $this->isPassword = true;

        $this->dehydrateStateUsing = fn ($state) => Hash::make($state);

        $this->isDehydrated = fn ($state) => filled($state);
    }

    public function requiredOnCreate(): static
    {
        $this->isRequired = fn (string $context) => $context === 'create';

        return $this;
    }
}
