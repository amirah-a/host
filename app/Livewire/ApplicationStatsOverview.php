<?php

namespace App\Livewire;

use App\Models\Applicant;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Carbon;

class ApplicationStatsOverview extends BaseWidget
{
    // Makes it look nice on desktop (4 columns)
    protected int | array | null $columns = 4;

    // Optional: Refresh data every 30 seconds without reloading the page
    protected ?string $pollingInterval = '30s';

    protected function getStats(): array
    {
        // Use count() on the query for speed, not ::all()
        $total = Applicant::count();
        $c1 = Applicant::where('APL_Programme', 'Cohort 1')->count();
        $c2 = Applicant::where('APL_Programme', 'Cohort 2')->count();
        $c3 = Applicant::where('APL_Programme', 'Cohort 3')->count();

        $timestamp = Carbon::now()->format('H:i:s');

        return [
            Stat::make('Total Applications', $total)
                ->description("Last sync: {$timestamp}")
                ->descriptionIcon('heroicon-m-arrow-path')
                ->color('primary'),

            Stat::make('Cohort 1', $c1)
                ->icon('heroicon-m-user-group')
                ->color('info'),

            Stat::make('Cohort 2', $c2)
                ->icon('heroicon-m-user-group')
                ->color('warning'),

            Stat::make('Cohort 3', $c3)
                ->icon('heroicon-m-user-group')
                ->color('success'),
        ];
    }
}
