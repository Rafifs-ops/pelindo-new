<?php

namespace App\Filament\Resources\MeetingSchedules\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MeetingScheduleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                DatePicker::make('date')
                    ->required(),
                TextInput::make('location'),
                TextInput::make('agenda'),
            ]);
    }
}
