<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Filament\Widgets\ApplicationStats;
use App\Filament\Widgets\ApplicationsChart;
use App\Livewire\ListApplicants;

class AdminDashboard extends Page
{
    // Non-static property
    protected string $view = 'filament.pages.admin-dashboard';

    protected ?string $heading = 'Admin Dashboard';
    protected static ?string $slug = 'dashboard';

    // Header widgets
    protected function getHeaderWidgets(): array
    {
        return [
            ApplicationStats::class,
            ApplicationsChart::class,
        ];
    }

    // Page widgets
    protected function getWidgets(): array
    {
        return [
            ApplicationsChart::class,
        ];
    }
}
