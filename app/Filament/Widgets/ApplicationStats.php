<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Applicant;
use App\Models\User;

class ApplicationStats extends StatsOverviewWidget
{
     protected int|string|array $columnSpan = 1; // half width

    protected function getStats(): array
    {
        return [
            Stat::make('Total Applications', Applicant::count())
                ->color('primary'),

            Stat::make('Duplicates', 50)
                ->color('warning'),

            Stat::make('Total Valid', User::count())
                ->description('Total number of applications eligible for scoring')
                ->color('info'),

            Stat::make('Scored Applications', User::count())
                ->color(''),
        ];
    }
}
