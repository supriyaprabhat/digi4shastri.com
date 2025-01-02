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
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SectionResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SectionResource\RelationManagers;

class SectionResource extends Resource
{
    protected static ?string $model = Section::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('page_id')
                    ->label('Page')
                    ->required()
                    ->relationship('page', 'name', fn ($query) => $query->orderBy('order')), // Assuming there's a relationship defined in the model
                    // ->searchable(),
                Forms\Components\TextInput::make('section_name')
                    ->required(),
                Forms\Components\TextInput::make('order')
                    ->default(0),
                Toggle::make('status')
                    ->label('Is Active')
                    ->default(true),
                Forms\Components\FileUpload::make('image'),
                // Forms\Components\FileUpload::make('image1'),
                // Forms\Components\FileUpload::make('image2'),
                Forms\Components\TextInput::make('heading'),
                Forms\Components\TextInput::make('sub_heading1'),
                Forms\Components\TextInput::make('sub_heading2'),
                Forms\Components\TextInput::make('sub_heading3'),
                Forms\Components\TextInput::make('sub_heading4'),
                Forms\Components\TextInput::make('sub_heading5'),
                // Forms\Components\TextInput::make('sub_heading4'),
                // Forms\Components\TextInput::make('sub_heading5'),
                // Forms\Components\TextInput::make('other3'),
                // Forms\Components\TextInput::make('other4'),
                // Forms\Components\TextInput::make('other5'),
                Forms\Components\TextInput::make('button_link'),
                Forms\Components\TextInput::make('button_name'),
                Forms\Components\TextInput::make('button_link1'),
                Forms\Components\TextInput::make('button_name1'),
                // Key skills to learn JSON
                Repeater::make('other1')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Image')
                            ->directory('front/course')
                            ->disk('public'),
                        TextInput::make('text1')
                            ->label('Text 1'),
                        TextInput::make('text2')
                            ->label('Text 2'),
                        TextInput::make('text3')
                            ->label('Text 3'),
                        TextInput::make('btn_name')
                            ->label('CTA name'),
                        TextInput::make('button_link')
                            ->label('CTA link'),
                    ])
                    ->addActionLabel('Add')
                    ->collapsible()
                    ->collapsed(false)
                    ->columnSpan('full')
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page.name')
                    ->label('Page Name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('section_name'),
                Tables\Columns\TextColumn::make('order'),
                Tables\Columns\TextColumn::make('status'),
            ])
            ->filters([
                SelectFilter::make('page_id')
                    ->label('Page')
                    ->options(Page::orderBy('order')->pluck('name', 'id')->toArray())
                    ->placeholder('All Pages'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSections::route('/'),
            'create' => Pages\CreateSection::route('/create'),
            'edit' => Pages\EditSection::route('/{record}/edit'),
        ];
    }
}
