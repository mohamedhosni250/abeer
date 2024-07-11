<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramResource\Pages;
use App\Models\Program;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;


class ProgramResource extends Resource
{
    protected static ?string $model = Program::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('Program Name'),
                FileUpload::make('image_url')
                    ->label('Image')->directory('programs_images'),
                Textarea::make('description')
                    ->label('Description'),
                TextInput::make('duration')
                    ->label('Duration (years)'),
                TextInput::make('study_mode')
                    ->label('Study Mode'),
                TextInput::make('intake')
                    ->label('Intake Period'),
                TextInput::make('fee_per_year')
                    ->label('Fee Per Year'),
                TextInput::make('scholarship_percentage')
                    ->label('Scholarship Percentage'),
                TextInput::make('scholarship_fee_per_year')
                    ->label('Scholarship Fee Per Year'),
                Select::make('university_id')
                    ->relationship('university', 'name')
                    ->label('University')->required(),
                Select::make('degree_id')->required()
                    ->relationship('degree', 'name')
                    ->label('Degree'),
                Select::make('department_id')->required()
                    ->relationship('department', 'name')
                    ->label('Department'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Program Name'),
                TextColumn::make('university.name')->label('University'),
                TextColumn::make('degree.name')->label('Degree'),
                TextColumn::make('department.name')->label('Department'),
                TextColumn::make('duration')->label('Duration'),
                TextColumn::make('fee_per_year')->label('Fee Per Year'),
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
            'index' => Pages\ListPrograms::route('/'),
            'create' => Pages\CreateProgram::route('/create'),
            'edit' => Pages\EditProgram::route('/{record}/edit'),
        ];
    }
}
