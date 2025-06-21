<?php

namespace App\Filament\Resources\RombonganResource\Pages;

use App\Filament\Resources\RombonganResource;
use App\Filament\Resources\RombonganResource\Widgets\StatsOverview;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRombongans extends ListRecords
{
    protected static string $resource = RombonganResource::class;
    
    protected static ?string $title = 'Daftar Tamu Rombongan';

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
