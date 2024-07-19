<?php

namespace App\Filament\Imports;

use App\Models\University;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class UniversityImporter extends Importer
{
    protected static ?string $model = University::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('name')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('slug')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('is_visible')
                ->requiredMapping()
                ->boolean()
                ->rules(['required', 'boolean']),
            ImportColumn::make('is_featured')
                ->requiredMapping()
                ->boolean()
                ->rules(['required', 'boolean']),
            ImportColumn::make('logo')
                ->rules(['max:255']),
            ImportColumn::make('featured_image')
                ->rules(['max:255']),
            ImportColumn::make('starting_fee')
                ->rules(['max:255']),
            ImportColumn::make('ranking')
                ->rules(['max:255']),
            ImportColumn::make('students_count')
                ->rules(['max:255']),
            ImportColumn::make('programs_count')
                ->rules(['max:255']),
            ImportColumn::make('description'),
            ImportColumn::make('location_id')
                ->requiredMapping()
                ->numeric()
                ->rules(['required', 'integer']),
        ];
    }

    public function resolveRecord(): ?University
    {
        // return University::firstOrNew([
        //     // Update existing records, matching them by `$this->data['column_name']`
        //     'email' => $this->data['email'],
        // ]);

        return new University();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your university import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
