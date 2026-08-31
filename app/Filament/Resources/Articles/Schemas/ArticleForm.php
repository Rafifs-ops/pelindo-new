<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('type')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                Textarea::make('content')
                    ->columnSpanFull(),
                DatePicker::make('date')
                    ->required(),
                FileUpload::make('image_url')
                    ->image()
                    ->disk('public')
                    ->directory('articles'),
            ]);
    }
}
