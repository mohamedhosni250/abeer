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
            Stat::make('Unique views', University::count())
                ->description('32k increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Unique views', Program::count())
                ->description('32k increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Unique views', Degree::count())
                ->description('32k increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Courses', Course::count())
                ->description('Courses That we have  ')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),

        ];
    }
}
