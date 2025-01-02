<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Course;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CourseResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('code')
                ->required()
                ->label('Course Code'),
                
            TextInput::make('name')
                ->required()
                ->label('Course Name'),
            
            TextInput::make('rating')
                ->label('Rating')
                ->required(),
                
            TextInput::make('total_enrolled')
                ->label('Total Enrolled')
                ->numeric()
                ->required(),

            TextInput::make('price_inr')
                ->label('Course Price')
                ->numeric()
                ->required(),

            TextInput::make('course_total_user')
                ->label('Total Users')
                ->numeric()
                ->required(),

            TextInput::make('additional_user_inr')
                ->label('Price/Additional User')
                ->numeric()
                ->required(),

            Textarea::make('short_description')
                ->required(),

            Textarea::make('description')
                ->required(),

            Toggle::make('status')
                ->label('Is Active')
                ->default(true),
            
            FileUpload::make('thumbnail_image')
                ->label('Thumbnail Image')
                ->required()
                ->directory('front/course')
                ->disk('public'),
                
            // faqs JSON
            Repeater::make('faqs')
                ->schema([
                    TextInput::make('question')
                        ->label('Question')
                        ->required(),
                    Textarea::make('answer')
                        ->label('Answer')
                        ->required(),
                ])
                ->addActionLabel('Add FaQ')
                ->collapsible()
                ->collapsed(false)
                ->columnSpan('full')
                ->columns(1),

            TextInput::make('heading1')
                ->label('Heading 1'),
                
            Textarea::make('p1')
                ->label('Paragraph 1'),

            TextInput::make('duration')
                ->label('Duration'),

            Repeater::make('cards')
                ->schema([
                    TextInput::make('heading')
                        ->label('Heading')
                        ->required(),
                    TextInput::make('texts')
                        ->label('Text')
                        ->required(),
                    TextInput::make('icon_code')
                        ->label('Icon Code')
                        ->required(),
                ])
                ->addActionLabel('Add')
                ->collapsible()
                ->collapsed(false)
                ->columnSpan('full')
                ->columns(1),
                
            // Curriculum JSON
            Repeater::make('curriculum_tab_1')
                ->schema([
                    TextInput::make('module')
                        ->label('Module Title')
                        ->required(),
                    Repeater::make('activities')
                        ->label('Activities')
                        ->schema([
                            Textarea::make('activity')
                                ->label('Activity Description')
                                ->rows(2)
                                ->required(),
                        ])
                        ->addActionLabel('Add Activity')
                        ->minItems(1)
                        ->maxItems(20),
                ])
                ->addActionLabel('Add Module')
                ->collapsible()
                ->collapsed(false)
                ->columnSpan('full')
                ->columns(1),

            // Curriculum JSON
            Repeater::make('curriculum_tab_2')
                ->schema([
                    TextInput::make('module')
                        ->label('Module Title')
                        ->required(),
                    Repeater::make('activities')
                        ->label('Activities')
                        ->schema([
                            Textarea::make('activity')
                                ->label('Activity Description')
                                ->rows(2)
                                ->required(),
                        ])
                        ->addActionLabel('Add Activity')
                        ->minItems(1)
                        ->maxItems(20),
                ])
                ->addActionLabel('Add Module')
                ->collapsible()
                ->collapsed(false)
                ->columnSpan('full')
                ->columns(1),


            // tools to learn JSON
            Repeater::make('tools_learn')
                ->schema([
                    TextInput::make('heading')
                        ->label('Tool heading')
                        ->required(),
                    FileUpload::make('image')
                        ->label('Tool Image')
                        ->required()
                        ->directory('front/course')
                        ->disk('public'),
                ])
                ->addActionLabel('Add Tool')
                ->collapsible()
                ->collapsed(false)
                ->columnSpan('full')
                ->columns(1),

            TextInput::make('heading2')
                ->label('Heading 2'),

            TextInput::make('heading3')
                ->label('Heading 3'),
                
            Textarea::make('p2')
                ->label('Paragraph 2'),

            FileUpload::make('brochure')
                ->label('Brouchure')
                ->directory('front/course')
                ->disk('public'),
            
            // Key skills to learn JSON
            Repeater::make('key_skills')
                ->schema([
                    TextInput::make('heading')
                        ->label('Skill Heading')
                        ->required(),
                    FileUpload::make('image')
                        ->label('Skill Image')
                        ->required()
                        ->directory('front/course')
                        ->disk('public'),
                ])
                ->addActionLabel('Add Skill')
                ->collapsible()
                ->collapsed(false)
                ->columnSpan('full')
                ->columns(1),

            // assignments JSON
            Repeater::make('assignments')
                ->schema([
                    TextInput::make('heading')
                        ->label('Heading')
                        ->required(),
                    Textarea::make('texts')
                        ->label('Text')
                        ->required(),
                ])
                ->addActionLabel('Add')
                ->collapsible()
                ->collapsed(false)
                ->columnSpan('full')
                ->columns(1),

            // projects JSON
            Repeater::make('projects')
                ->schema([
                    TextInput::make('heading')
                        ->label('Heading')
                        ->required(),
                    Textarea::make('texts')
                        ->label('Text')
                        ->required(),
                ])
                ->addActionLabel('Add')
                ->collapsible()
                ->collapsed(false)
                ->columnSpan('full')
                ->columns(1),

            // case studies JSON
            Repeater::make('case_studies')
                ->schema([
                    TextInput::make('heading')
                        ->label('Heading')
                        ->required(),
                    Textarea::make('texts')
                        ->label('Text')
                        ->required(),
                ])
                ->addActionLabel('Add')
                ->collapsible()
                ->collapsed(false)
                ->columnSpan('full')
                ->columns(1),

            // career support JSON
            Repeater::make('career_supports')
                ->schema([
                    FileUpload::make('icon')
                        ->label('Icon')
                        ->required()
                        ->directory('front/course')
                        ->disk('public'),
                    TextInput::make('heading')
                        ->label('Heading')
                        ->required(),
                    Textarea::make('texts')
                        ->label('Texts')
                        ->required(),
                    
                ])
                ->addActionLabel('Add')
                ->collapsible()
                ->collapsed(false)
                ->columnSpan('full')
                ->columns(1),

            // bonus_modules JSON
            Repeater::make('bonus_modules')
                ->schema([
                    FileUpload::make('icon')
                        ->label('Icon')
                        ->required()
                        ->directory('front/course')
                        ->disk('public'),
                    TextInput::make('heading')
                        ->label('Heading')
                        ->required(),
                    
                ])
                ->addActionLabel('Add')
                ->collapsible()
                ->collapsed(false)
                ->columnSpan('full')
                ->columns(1),
            
            // success_stories JSON
            Repeater::make('success_stories')
                ->schema([
                    FileUpload::make('icon')
                        ->label('Icon')
                        ->required()
                        ->directory('front/course')
                        ->disk('public'),
                    TextInput::make('name')
                        ->label('Name')
                        ->required(),
                    Textarea::make('texts')
                        ->label('Texts')
                        ->required(),
                    
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
                Tables\Columns\TextColumn::make('code')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('duration')->sortable(),
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
