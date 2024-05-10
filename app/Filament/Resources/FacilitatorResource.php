<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FacilitatorResource\Pages;
use App\Filament\Resources\FacilitatorResource\RelationManagers;
use App\Models\Facilitator;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FacilitatorResource extends Resource
{
    protected static ?string $model = Facilitator::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFacilitators::route('/'),
            'create' => Pages\CreateFacilitator::route('/create'),
            'edit' => Pages\EditFacilitator::route('/{record}/edit'),
        ];
    }
}
