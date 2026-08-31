<?php

namespace App\Filament\Resources\Reports\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ReportForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('year')
                    ->required(),
                FileUpload::make('file_url')
                    ->acceptedFileTypes(['application/pdf'])
                    ->disk('public')
                    ->directory('reports'),
            ]);
    }
}
