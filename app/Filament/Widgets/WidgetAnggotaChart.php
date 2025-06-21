<?php
namespace App\Filament\Widgets;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use App\Models\anggota;
use Filament\Widgets\LineChartWidget;

class WidgetAnggotaChart extends LineChartWidget
{
    protected static ?string $heading = 'Anggota Chart';
    protected function getData(): array
    {
        $data = Trend::model(anggota::class)
        ->between(
            start: now()->startOfYear(),
            end: now()->endOfYear(),
        )
        ->perMonth()
        ->count();
 
    return [
        'datasets' => [
            [
                'label' => 'Grafik Peningkatan Pendaftaran Anggota',
                'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                'borderColor' => '#FF8F00',
            ],
        ],
        'labels' => $data->map(fn (TrendValue $value) => $value->date),
    ];
    }
}
