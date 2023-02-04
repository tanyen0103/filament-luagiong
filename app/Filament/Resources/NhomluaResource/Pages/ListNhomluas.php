<?php

namespace App\Filament\Resources\NhomluaResource\Pages;

use App\Filament\Resources\NhomluaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNhomluas extends ListRecords
{
    protected static string $resource = NhomluaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
