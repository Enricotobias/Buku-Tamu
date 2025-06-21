<?php

namespace App\Filament\Resources\NonmemberResource\Widgets;

use App\Models\anggota;
use App\Models\Nonmember;
use App\Models\rombongan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    //protected static string $view = 'filament.resources.Nonmember-resource.widgets.stats-overview';

    protected function getCards(): array
    {
        return [
            Card::make('Non Anggota', Nonmember::all()->count())
             ->description('Total Non Anggota')
             ->descriptionIcon('heroicon-s-trending-up'),
        ];
    }
}
