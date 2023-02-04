<?php

namespace App\Filament\Resources\NhomluaResource\Pages;

use App\Filament\Resources\NhomluaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNhomlua extends EditRecord
{
    protected static string $resource = NhomluaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
