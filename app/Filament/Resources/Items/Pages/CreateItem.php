<?php

namespace App\Filament\Resources\Items\Pages;

use App\Filament\Resources\Items\ItemResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Arr;

class CreateItem extends CreateRecord
{
    protected static string $resource = ItemResource::class;

    protected function preserveFormDataWhenCreatingAnother(array $data): array
    {
        return Arr::only($data, ['tags']);
    }
}
