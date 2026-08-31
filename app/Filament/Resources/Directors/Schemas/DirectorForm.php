<?php

namespace App\Filament\Resources\Directors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DirectorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('position')
                    ->required(),
                FileUpload::make('image_url')
                    ->image()
                    ->disk('public')
                    ->directory('directors'),
            ]);
    }
}
