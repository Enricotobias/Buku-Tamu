<?php

namespace App\Filament\Widgets;

use App\Models\anggota;
use App\Models\Nonmember;
use App\Models\rombongan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Anggota', anggota::all()->count())
            ->description('Total Anggota')
            ->descriptionIcon('heroicon-s-trending-up'),
           Card::make('Non Anggota', Nonmember::all()->count())
            ->description('Total Non Anggota')
            ->descriptionIcon('heroicon-s-trending-up'),
            Card::make('Rombongan', rombongan::all()->count())
            ->description('Total Rombongan')
            ->descriptionIcon('heroicon-s-trending-up'),
        ];
    }
}
