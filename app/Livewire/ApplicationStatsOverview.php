<?php

namespace App\Livewire;

use App\Models\Applicant;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Carbon;
use Illuminate\Support\HtmlString;

class ApplicationStatsOverview extends BaseWidget
{
    // Makes it look nice on desktop (4 columns)
    protected int|array|null $columns = 4;

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
            // Total Card: Keep the standard look for the hero stat
            Stat::make('Total Applications', $total)
                ->description("Last sync: {$timestamp}")
                ->descriptionIcon('heroicon-m-arrow-path')
                ->color('primary'),

            // Cohort 1: Venue at top, Number at bottom
            Stat::make('Wallerfield Activity Centre', '') // Leave value empty
                ->description(
                    new HtmlString("<span class='text-3xl font-bold text-info-600 tracking-tighter'>{$c1}</span>"),
                )
                ->color('info'),

            // Cohort 2
            Stat::make('California Youth Development Centre', '')
                ->description(
                    new HtmlString("<span class='text-3xl font-bold text-warning-600 tracking-tighter'>{$c2}</span>"),
                )
                ->color('warning'),

            // Cohort 3
            Stat::make('COSTAATT City Campus, POS', '')
                ->description(
                    new HtmlString("<span class='text-3xl font-bold text-success-600 tracking-tighter'>{$c3}</span>"),
                )
                ->color('success'),
        ];
    }
}
