<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Applicant;
use Carbon\Carbon;

class ApplicationsChart extends ChartWidget
{
    protected ?string $heading = 'Applications Per Day';

    protected function getData(): array
    {
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        // Number of days in the current month
        $daysInMonth = Carbon::now()->daysInMonth;

        // Get counts per day for the current month
        $data = Applicant::selectRaw('DAY(created_at) as day, COUNT(*) as total')->whereYear('created_at', $currentYear)->whereMonth('created_at', $currentMonth)->groupBy('day')->pluck('total', 'day'); // pluck totals with day as key

        // Fill missing days with 0
        $totals = array_map(fn($d) => $data[$d] ?? 0, range(1, $daysInMonth));

        return [
            'labels' => range(1, $daysInMonth), // Days 1, 2, 3 ...
            'datasets' => [
                [
                    'label' => 'Applications',
                    'data' => $totals,
                ],
            ],
        ];
    }
    protected function getType(): string
    {
        return 'line';
    }
}
