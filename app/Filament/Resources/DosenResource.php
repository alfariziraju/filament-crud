<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DosenResource\Pages;
use App\Models\Dosen;
use Filament\Forms;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class DosenResource extends Resource
{
    protected static ?string $model = Dosen::class;
    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nip')->required()->unique()->maxLength(20),
                TextInput::make('nama')->required()->maxLength(128),
                TextInput::make('email')->required()->unique()->maxLength(128),
                Select::make('jurusan')
                    ->options([
                        'TI' => 'Teknik Informatika',
                        'SI' => 'Sistem Informasi',
                        'ILKOM' => 'Ilmu Komputer',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('nip')->label('NIP')->sortable()->searchable(),
                TextColumn::make('nama')->label('Nama')->sortable()->searchable(),
                TextColumn::make('email')->label('Email')->sortable(),
                TextColumn::make('jurusan')->label('Jurusan')->sortable(),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDosens::route('/'),
            'create' => Pages\CreateDosen::route('/create'),
            'edit' => Pages\EditDosen::route('/{record}/edit'),
            'report' => Pages\DosenReport::route('/report'),
        ];
    }
}
