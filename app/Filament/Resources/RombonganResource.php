<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RombonganResource\Pages;
use App\Filament\Resources\RombonganResource\RelationManagers;
use App\Filament\Resources\RombonganResource\Widgets\StatsOverview;
use App\Models\Rombongan;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RombonganResource extends Resource
{
    protected static ?string $model = Rombongan::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Rombongan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('NamaKetua')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('NomerTelponKetua')
                    ->maxLength(20),
                Forms\Components\TextInput::make('AsalInstansi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('AlamatInstansi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('CountPersonel')
                ->label('Jumlah Personil')
                ,
                Forms\Components\TextInput::make('CountPNS')
                ->label('Jumlah PNS')
                ,
                Forms\Components\TextInput::make('CountPSwasta')
                ->label('Jumlah Pegawai Swasta')
                ,
                Forms\Components\TextInput::make('CountPeneliti')
                ->label('Jumlah Peneliti')
                ,
                Forms\Components\TextInput::make('CountGuru')
                ->label('Jumlah Guru')
                ,
                Forms\Components\TextInput::make('CountDosen')
                ->label('Jumlah Dosen')
                ,
                Forms\Components\TextInput::make('CountPensiunan')
                ->label('Jumlah Pensiunan')
                ,
                Forms\Components\TextInput::make('CountTNI')
                ->label('Jumlah TNI')
                ,
                Forms\Components\TextInput::make('CountWiraswasta')
                ->label('Jumlah Wiraswasta')
                ,
                Forms\Components\TextInput::make('CountPelajar')
                ->label('Jumlah Pekerjaan')
                ,
                Forms\Components\TextInput::make('CountMahasiswa')
                ->label('Jumlah Mahasiswa')
                ,
                Forms\Components\TextInput::make('CountLainnya')
                ->label('Jumlah Lainnya')
                ,
                Forms\Components\TextInput::make('CountSD')
                ->label('Jumlah SD')
                ,
                Forms\Components\TextInput::make('CountSMP')
                ->label('Jumlah SMP')
                ,
                Forms\Components\TextInput::make('CountSMA')
                ->label('Jumlah SMA')
                ,
                Forms\Components\TextInput::make('CountD1')
                ->label('Jumlah D1')
                ,
                Forms\Components\TextInput::make('CountD2')
                ->label('Jumlah D2')
                ,
                Forms\Components\TextInput::make('CountD3')
                ->label('Jumlah D3')
                ,
                Forms\Components\TextInput::make('CountS1')
                ->label('Jumlah S1')
                ,
                Forms\Components\TextInput::make('CountS2')
                ->label('Jumlah S2')
                ,
                Forms\Components\TextInput::make('CountS3')
                ->label('Jumlah S3')
                ,
                Forms\Components\TextInput::make('CountLaki')
                ->label('Jumlah Laki-Laki')
                ,
                Forms\Components\TextInput::make('CountPerempuan')
                ->label('Jumlah Perempuan')
                ,
                Forms\Components\TextInput::make('TeleponInstansi')
                    ->maxLength(20),
                Forms\Components\TextInput::make('EmailInstansi')
                    ->maxLength(255),
                Forms\Components\TextInput::make('Information')
                    ->maxLength(255),
                Forms\Components\TextInput::make('NoPengunjung')
                    ->maxLength(50),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('NamaKetua'),
                Tables\Columns\TextColumn::make('event.Nama')->sortable()
                ->label('Event')
                ,
                Tables\Columns\TextColumn::make('NomerTelponKetua')
                ->label('Nomor Telepon Ketua')
                ,
                Tables\Columns\TextColumn::make('AsalInstansi')
                ->label('Asal Instansi')
                ,
                Tables\Columns\TextColumn::make('AlamatInstansi'),
                Tables\Columns\TextColumn::make('JumlahPersonil')
                ->label('Jumlah Personil')
                ,
                Tables\Columns\TextColumn::make('created_at')
                ->label('Waktu Kunjungan')   
                ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRombongans::route('/'),
            'create' => Pages\CreateRombongan::route('/create'),
            'edit' => Pages\EditRombongan::route('/{record}/edit'),
        ];
    }    

    public static function getWidgets(): array
    {
        return[
            StatsOverview::class
        ];
    }
}
