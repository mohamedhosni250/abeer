<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UniversityResource\Pages;
use App\Models\Location;
use App\Models\University;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;


class UniversityResource extends Resource
{
    protected static ?string $model = University::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('name')
                    ->required()
                    ->label('University Name')->reactive()->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')->disabled(),
                FileUpload::make('logo')
                    ->label('logo')->directory('universities_logos'),
                FileUpload::make('featured_image')
                    ->label('Featured Image')
                    ->directory('featured_images'),
                Section::make('description ')->schema([
                    MarkdownEditor::make('description')
                        ->label('Description'),
                ]),
                Select::make('location_id')
                    ->label('Location')
                    ->options(Location::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                TextInput::make('starting_fee')
                    ->label('Starting Fee'),
                TextInput::make('ranking')
                    ->label('Ranking'),
                TextInput::make('students_count')
                    ->label('Students Count'),
                TextInput::make('programs_count')
                    ->label('Programs Count'),

                Repeater::make('details')
                    ->relationship('details')
                    ->schema([
                        TextInput::make('tab_name')->label('Tab Name')->required(),
                        Textarea::make('content')->label('Content')->required(),
                    ])
                    ->label('University Details')
                    ->itemLabel(fn (array $state): ?string => $state['tab_name'] ?? null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('University Name'),
                ImageColumn::make('logo')->label('Logo'),
                TextColumn::make('location.name')->label('Location'),

                TextColumn::make('ranking')->label('Ranking'),
                TextColumn::make('students_count')->label('Students Count'),
                TextColumn::make('programs_count')->label('Programs Count'),
                ToggleColumn::make('is_visible'),
                ToggleColumn::make('is_featured')
            ])
            ->filters([
                // Add any table filters here if needed
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Define any relations if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUniversities::route('/'),
            'create' => Pages\CreateUniversity::route('/create'),
            'edit' => Pages\EditUniversity::route('/{record}/edit'),
        ];
    }
}
