<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\General;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\GeneralResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GeneralResource\RelationManagers;

class GeneralResource extends Resource
{
    protected static ?string $model = General::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('mobile_1')->label('Mobile 1')->required(),
            Forms\Components\TextInput::make('mobile_2')->label('Mobile 2')->nullable(),
            Forms\Components\TextInput::make('email_1')->label('Email 1')->required()->email(),
            Forms\Components\TextInput::make('email_2')->label('Email 2')->nullable()->email(),
            Forms\Components\Textarea::make('description')->label('Description')->nullable(),
            Forms\Components\Textarea::make('short_description')->label('Short Description')->nullable(),
            Forms\Components\Repeater::make('repeater_1')
                ->label('Repeater 1')
                ->schema([
                    Forms\Components\TextInput::make('field_1')->label('Field 1'),
                    Forms\Components\TextInput::make('field_2')->label('Field 2'),
                ])
                ->nullable()->columnSpan('full'),
            // Forms\Components\Repeater::make('repeater_2')
            //     ->label('Repeater 2')
            //     ->schema([
            //         Forms\Components\TextInput::make('field_1')->label('Field 1'),
            //         Forms\Components\TextInput::make('field_2')->label('Field 2'),
            //     ])
            //     ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('mobile_1')->label('Mobile 1'),
                Tables\Columns\TextColumn::make('email_1')->label('Email 1'),
                Tables\Columns\TextColumn::make('description')->label('Description')->limit(50),
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
            'index' => Pages\ListGenerals::route('/'),
            'create' => Pages\CreateGeneral::route('/create'),
            'edit' => Pages\EditGeneral::route('/{record}/edit'),
        ];
    }
}
