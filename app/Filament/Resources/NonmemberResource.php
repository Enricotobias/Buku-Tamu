<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NonmemberResource\Pages;
use App\Filament\Resources\NonmemberResource\RelationManagers;
use App\Filament\Resources\NonmemberResource\Widgets\StatsOverview;
use App\Models\Nonmember;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NonmemberResource extends Resource
{
    protected static ?string $model = Nonmember::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Non Anggota';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('Profesi_id')
                ->label('Pekerjaan')
                ->relationship('job', 'Pekerjaan'),
                Forms\Components\Select::make('PendidikanTerakhir_id')
                ->label('Pendidikan')
                ->relationship('pendidikan', 'Nama'),
                Forms\Components\Select::make('JenisKelamin')
                ->label('Jenis Kelamin')
                ->relationship('gender', 'Name'),
                Forms\Components\Textarea::make('Alamat')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Nama')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('event.Nama')->sortable()
                ->label('Event')
                ,
                Tables\Columns\TextColumn::make('gender.Name')->sortable()
                ->label('Jenis Kelamin')
                ,
                Tables\Columns\TextColumn::make('job.Pekerjaan')->sortable()
                ->label('Pekerjaan')
                ,
                Tables\Columns\TextColumn::make('pendidikan.Nama')->sortable()
                ,
                Tables\Columns\TextColumn::make('Alamat')->searchable(),
                Tables\Columns\TextColumn::make('created_at')->searchable()
                ->label('Waktu Kunjungan')
                ,
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
            'index' => Pages\ListNonmembers::route('/'),
            'create' => Pages\CreateNonmember::route('/create'),
            'edit' => Pages\EditNonmember::route('/{record}/edit'),
        ];
    }    

    public static function getWidgets(): array
    {
        return[
            StatsOverview::class
        ];
    }
}
