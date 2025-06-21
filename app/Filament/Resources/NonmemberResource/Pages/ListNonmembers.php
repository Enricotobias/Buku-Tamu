<?php

namespace App\Filament\Resources\NonmemberResource\Pages;

use App\Filament\Resources\NonmemberResource;
use App\Filament\Resources\NonmemberResource\Widgets\StatsOverview;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNonmembers extends ListRecords
{
    protected static string $resource = NonmemberResource::class;

    protected static ?string $title = 'Daftar Tamu Non Anggota';

    protected function getActions(): array
    {
        return [
           // Actions\CreateAction::make(),
            
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }

}
