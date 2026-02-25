<?php

namespace App\Filament\Resources\Items\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                TextInput::make('price')->required(),
                Repeater::make('tags')
                ->schema([
                    TextInput::make('tag')->required(),
                ])
                ,
            ]);
    }
}
