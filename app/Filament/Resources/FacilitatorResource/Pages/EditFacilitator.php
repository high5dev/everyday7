<?php

namespace App\Filament\Resources\FacilitatorResource\Pages;

use App\Filament\Resources\FacilitatorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFacilitator extends EditRecord
{
    protected static string $resource = FacilitatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
