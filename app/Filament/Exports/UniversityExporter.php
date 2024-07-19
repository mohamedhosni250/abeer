<?php

namespace App\Filament\Exports;

use App\Models\University;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class UniversityExporter extends Exporter
{
    protected static ?string $model = University::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')
                ->label('ID'),
            ExportColumn::make('name'),
            ExportColumn::make('slug'),
            ExportColumn::make('is_visible'),
            ExportColumn::make('is_featured'),
            ExportColumn::make('logo'),
            ExportColumn::make('featured_image'),
            ExportColumn::make('starting_fee'),
            ExportColumn::make('ranking'),
            ExportColumn::make('students_count'),
            ExportColumn::make('programs_count'),
            ExportColumn::make('description'),
            ExportColumn::make('location_id'),
            ExportColumn::make('created_at'),
            ExportColumn::make('updated_at'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your university export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
