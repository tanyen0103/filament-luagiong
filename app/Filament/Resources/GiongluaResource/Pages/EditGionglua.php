<?php

namespace App\Filament\Resources\GiongluaResource\Pages;

use App\Filament\Resources\GiongluaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGionglua extends EditRecord
{
    protected static string $resource = GiongluaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
