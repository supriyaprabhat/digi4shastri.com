<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\FreeCounseling;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FreeCounselingResource\Pages;
use App\Filament\Resources\FreeCounselingResource\RelationManagers;

class FreeCounselingResource extends Resource
{
    protected static ?string $model = FreeCounseling::class;

    protected static ?string $navigationGroup = 'Forms';

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('email')
                ->email()
                ->nullable()
                ->maxLength(255),
            Forms\Components\TextInput::make('mobile')
                ->required()
                ->maxLength(15),
            Forms\Components\TextInput::make('choose_center')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('mobile'),
                Tables\Columns\TextColumn::make('choose_center'),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
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
            'index' => Pages\ListFreeCounselings::route('/'),
            'create' => Pages\CreateFreeCounseling::route('/create'),
            'edit' => Pages\EditFreeCounseling::route('/{record}/edit'),
        ];
    }
}
