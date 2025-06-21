<?php
namespace App\Filament\Widgets;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use App\Models\Nonmember;
use Filament\Widgets\LineChartWidget;

class WidgetNonAnggotaChart extends LineChartWidget
{
    protected static ?string $heading = 'Non-Anggota Chart';
    protected function getData(): array
    {
        $data = Trend::model(nonmember::class)
        ->between(
            start: now()->startOfYear(),
            end: now()->endOfYear(),
        )
        ->perMonth()
        ->count();
 
    return [
        'datasets' => [
            [
                'label' => 'Grafik Peningkatan Pendaftaran Non-Anggota',
                'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                'borderColor' => '#FF8F00',
            ],
        ],
        'labels' => $data->map(fn (TrendValue $value) => $value->date),
    ];
    }
}
