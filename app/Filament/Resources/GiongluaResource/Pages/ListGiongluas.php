<?php

namespace App\Filament\Resources\GiongluaResource\Pages;

use App\Filament\Resources\GiongluaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGiongluas extends ListRecords
{
    protected static string $resource = GiongluaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
