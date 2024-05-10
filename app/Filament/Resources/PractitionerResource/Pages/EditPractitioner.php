<?php

namespace App\Filament\Resources\PractitionerResource\Pages;

use App\Filament\Resources\PractitionerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPractitioner extends EditRecord
{
    protected static string $resource = PractitionerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
