<?php

namespace App\Filament\Resources\Documents\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DocumentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('type')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('year'),
                FileUpload::make('file_url')
                    ->acceptedFileTypes(['application/pdf'])
                    ->disk('public')
                    ->directory('documents'),
            ]);
    }
}
