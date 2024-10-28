<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlamatResource\Pages;
use App\Models\Alamat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AlamatResource extends Resource
{
    protected static ?string $model = Alamat::class;

    protected static string $relationship = 'penerima';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('provinsi')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('kota_kabupaten')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('kecamatan')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('desa_kelurahan')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('kode_pos')
                    ->required()
                    ->maxLength(5),
                Forms\Components\Textarea::make('alamat_lengkap')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('provinsi')->label('Provinsi'),
                Tables\Columns\TextColumn::make('kota_kabupaten')->label('Kota/Kabupaten'),
                Tables\Columns\TextColumn::make('kecamatan')->label('Kecamatan'),
                Tables\Columns\TextColumn::make('desa_kelurahan')->label('Desa/Kelurahan'),
                Tables\Columns\TextColumn::make('kode_pos')->label('Kode Pos'),
                Tables\Columns\TextColumn::make('alamat_lengkap')->label('Alamat Lengkap'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListAlamats::route('/'),
            'create' => Pages\CreateAlamat::route('/create'),
            'edit' => Pages\EditAlamat::route('/{record}/edit'),
        ];
    }

    // Tambahkan fungsi create dan update jika diperlukan
    public static function create(array $data)
    {
        return Alamat::create($data);
    }

    public static function update(Alamat $alamat, array $data)
    {
        $alamat->update($data);
        return $alamat;
    }
}
