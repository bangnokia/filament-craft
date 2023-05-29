# Filament Craft

This package is a collection of tools for working with Filament php, adds some useful utilities and helpers 
to makes working with Filament Admin more enjoyable.

## Traits
- `Concerns\DisableCreate::class` - Disable create resource, usage: `use DisableCreate`
- `Concerns\DisableEdit::class` - Disable edit resource, usage: `use DisableEdit`

## Form Fields
- `Forms\Password::class`: Laravel password field, auto hash the password, with extra method `requiredOnCreate`
