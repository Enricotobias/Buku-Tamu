<?php

namespace App\Filament\Resources\RombonganResource\Widgets;

use App\Models\rombongan;
use Filament\Widgets\Widget;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    //protected static string $view = 'filament.resources.rombongan-resource.widgets.stats-overview';

    protected function getCards(): array
    {
        return [
            Card::make('Rombongan', rombongan::all()->count())
             ->description('Total Rombongan')
             ->descriptionIcon('heroicon-s-trending-up')
        ];
    }
}
