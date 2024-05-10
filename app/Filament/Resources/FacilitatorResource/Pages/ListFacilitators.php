<?php

namespace App\Filament\Resources\FacilitatorResource\Pages;

use App\Filament\Resources\FacilitatorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFacilitators extends ListRecords
{
    protected static string $resource = FacilitatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
