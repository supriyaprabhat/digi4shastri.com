<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Center;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CenterResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CenterResource\RelationManagers;

class CenterResource extends Resource
{
    protected static ?string $model = Center::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Grid::make(2)->schema([
                TextInput::make('name')->required()->label('Center Name'),
                TextInput::make('students_trained')->required()->numeric()->label('Students Trained'),
                TextInput::make('students_placed')->required()->numeric()->label('Students Placed'),
                TextInput::make('expert_mentors')->required()->numeric()->label('Expert Mentors'),
                TextInput::make('years_in_industry')->required()->numeric()->label('Years in Industry'),
            ]),
            TextInput::make('cta_link_1')->required()->label('CTA Link 1'),
            TextInput::make('cta_name_1')->required()->label('CTA Name 1'),
            TextInput::make('heading')->required()->label('Heading'),
            TextInput::make('sub_heading1')->required()->label('Sub Heading 1'),
            Textarea::make('paragraph1')->required()->label('Paragraph 1'),
            TextInput::make('cta_link_2')->required()->label('CTA Link 2'),
            TextInput::make('cta_name_2')->required()->label('CTA Name 2'),
            TextInput::make('cta_link_3')->required()->label('CTA Link 3'),
            TextInput::make('cta_name_3')->required()->label('CTA Name 3'),
            TextInput::make('sub_heading2')->required()->label('Sub Heading 2'),
            TextInput::make('sub_heading3')->required()->label('Sub Heading 3'),
            Textarea::make('paragraph2')->required()->label('Paragraph 2'),
            FileUpload::make('image1')->required()->label('Image 1')->image(),
            TextInput::make('cta_link_4')->required()->label('CTA Link 4'),
            TextInput::make('cta_name_4')->required()->label('CTA Name 4'),
            TextInput::make('sub_heading4')->required()->label('Sub Heading 4'),
            Textarea::make('paragraph3')->required()->label('Paragraph 3'),
            TextInput::make('sub_heading5')->required()->label('Sub Heading 5'),
            Textarea::make('paragraph4')->required()->label('Paragraph 4'),
            Repeater::make('repeater1')->required()->schema([
                TextInput::make('text')->required()->label('Text'),
            ])->columnSpan('full')->label('Repeater 1')->collapsible(),
            Repeater::make('repeater2')->schema([
                TextInput::make('heading')->required(),
                TextInput::make('text1')->required(),
                TextInput::make('text2')->required(),
            ])->required()->label('Repeater 2')->columnSpan('full')->collapsible(),
            TextInput::make('cta_link_5')->required()->label('CTA Link 5'),
            TextInput::make('cta_name_5')->required()->label('CTA Name 5'),
            TextInput::make('cta_link_6')->required()->label('CTA Link 6'),
            TextInput::make('cta_name_6')->required()->label('CTA Name 6'),
            Repeater::make('faq')->schema([
                TextInput::make('question')->required()->label('FAQ Question'),
                Textarea::make('answer')->required()->label('FAQ Answer'),
            ])->required()->label('FAQ')->columnSpan('full')->collapsible(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('students_trained')->label('Trained Students'),
                Tables\Columns\TextColumn::make('students_placed')->label('Placed Students'),
                Tables\Columns\TextColumn::make('expert_mentors')->label('Mentors'),
                Tables\Columns\TextColumn::make('years_in_industry')->label('Industry Experience'),
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->date(),
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
            'index' => Pages\ListCenters::route('/'),
            'create' => Pages\CreateCenter::route('/create'),
            'edit' => Pages\EditCenter::route('/{record}/edit'),
        ];
    }
}
