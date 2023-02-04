<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NhomluaResource\Pages;
use App\Filament\Resources\NhomluaResource\RelationManagers;
use App\Models\Nhomlua;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Card;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NhomluaResource extends Resource
{
    protected static ?string $model = Nhomlua::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListNhomluas::route('/'),
            'create' => Pages\CreateNhomlua::route('/create'),
            'edit' => Pages\EditNhomlua::route('/{record}/edit'),
        ];
    }
}
