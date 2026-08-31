<?php

namespace App\Filament\Resources\Branches\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class BranchForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('parent_company')
                    ->required(),
                Textarea::make('address')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('dock_length')
                    ->required(),
                TextInput::make('stacking_area')
                    ->required(),
                FileUpload::make('image_url')
                    ->image()
                    ->disk('public')
                    ->directory('branches'),
            ]);
    }
}
