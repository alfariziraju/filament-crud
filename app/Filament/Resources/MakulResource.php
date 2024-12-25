<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MakulResource\Pages;
use App\Models\Makul;
use Filament\Forms;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;



class MakulResource extends Resource
{
    protected static ?string $model = Makul::class;
    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kode_makul')->required()->unique()->maxLength(20),
                TextInput::make('nama_makul')->required()->maxLength(128),
                TextInput::make('sks')->required()->numeric(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_makul')->label('Kode Makul')->sortable()->searchable(),
                TextColumn::make('nama_makul')->label('Nama Makul')->sortable()->searchable(),
                TextColumn::make('sks')->label('SKS')->sortable(),
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
            'index' => Pages\ListMakuls::route('/'),
            'create' => Pages\CreateMakul::route('/create'),
            'edit' => Pages\EditMakul::route('/{record}/edit'),
        ];
    }
}
