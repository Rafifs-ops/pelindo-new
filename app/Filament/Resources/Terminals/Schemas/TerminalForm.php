<?php

namespace App\Filament\Resources\Terminals\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TerminalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('key_feature'),
                FileUpload::make('image_url')
                    ->image()
                    ->disk('public')
                    ->directory('terminals'),
            ]);
    }
}
