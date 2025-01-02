<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Page;
use Filament\Tables;
use App\Models\Section;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use App\Filament\Resources\PageResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PageResource\RelationManagers;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('name')
                ->required()
                ->maxLength(255),

            TextInput::make('order')
                ->numeric()
                ->default(0),

            // Toggle::make('status')
            //     ->label('Is Active')
            //     ->default(true),

            TextInput::make('icon')
                ->label('Icon')
                ->maxLength(255)
                ->placeholder('e.g., fas fa-home'),

            TextInput::make('meta_title')
                ->label('Meta Title')
                ->maxLength(255),

            Textarea::make('meta_description')
                ->label('Meta Description'),

            Textarea::make('meta_keywords')
                ->label('Meta Keywords')
                ->placeholder('Comma-separated keywords'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('order')
                    ->sortable(),

                // TextColumn::make('status')
                //     ->label('Active'),

                // TextColumn::make('icon')
                //     ->label('Icon'),

                // TextColumn::make('meta_title')
                //     ->label('Meta Title'),

                // TextColumn::make('meta_description')
                //     ->label('Meta Description')
                //     ->limit(50),

                // TextColumn::make('meta_keywords')
                //     ->label('Meta Keywords')
                //     ->limit(50),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Created At'),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }

}
