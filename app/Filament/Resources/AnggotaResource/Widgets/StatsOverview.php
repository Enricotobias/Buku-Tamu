<?php

namespace App\Filament\Resources\AnggotaResource\Widgets;

use App\Models\anggota;
use Filament\Widgets\Widget;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    //protected static string $view = 'filament.resources.anggota-resource.widgets.stats-overview';

    protected function getCards(): array
    {
        return [
            Card::make('Anggota', anggota::all()->count())
             ->description('Total Anggota')
             ->descriptionIcon('heroicon-s-trending-up')
        ];
    }
}
