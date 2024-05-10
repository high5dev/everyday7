<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('contact_email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('business_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('business_address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('business_city')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('business_state')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('business_zip')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('business_phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('facebook')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('instagram')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tiktok')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('contact_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('business_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('business_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('business_city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('business_state')
                    ->searchable(),
                Tables\Columns\TextColumn::make('business_zip')
                    ->searchable(),
                Tables\Columns\TextColumn::make('business_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('facebook')
                    ->searchable(),
                Tables\Columns\TextColumn::make('instagram')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tiktok')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
    
    public static function canCreate(): bool
    {
       return false;
    }        
}
