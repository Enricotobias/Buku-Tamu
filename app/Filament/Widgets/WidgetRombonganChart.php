<?php

namespace App\Filament\Widgets;

use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use App\Models\rombongan;
use Filament\Widgets\LineChartWidget;

class WidgetRombonganChart extends LineChartWidget
{
    protected static ?string $heading = 'Rombongan Chart';
    protected function getData(): array
    {

        $data = Trend::model(rombongan::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Grafik Peningkatan Pendaftaran Rombongan',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                    'borderColor' => '#FF8F00',
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }
}
