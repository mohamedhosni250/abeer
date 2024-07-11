<?php

namespace App\Filament\Resources\UniversityResource\Widgets;

use App\Models\Course;
use App\Models\Degree;
use App\Models\Program;
use App\Models\University;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UniversitiesWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Universities', University::count())
                ->description(' With Abeer Education')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Programs', Program::count())
                ->description('With Abeer Education')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Departments', Degree::count())
                ->description('With Abeer Education')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Courses', Course::count())
                ->description('Courses That we have  ')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),

        ];
    }
}
