<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Filament\Resources\BannerResource\RelationManagers;
use App\Models\Banner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Imágenes del Banner')
                ->description('Sube las dos versiones de la imagen para el banner.')
                ->schema([
                    Forms\Components\FileUpload::make('image_desktop')
                        ->label('Imagen para Escritorio')
                        ->image()
                        ->required()
                        ->disk('public') // Importante: para que sean accesibles públicamente
                        ->directory('banners')
                        ->helperText('Tamaño recomendado: 6000x1875px.'),

                    Forms\Components\FileUpload::make('image_mobile')
                        ->label('Imagen para Móvil')
                        ->image()
                        ->required()
                        ->disk('public')
                        ->directory('banners')
                        ->helperText('Tamaño recomendado: 2500x1250px.'),
                ])->columns(2),

            Forms\Components\Section::make('Detalles y Visibilidad')
                ->schema([
                    Forms\Components\TextInput::make('link')
                        ->label('Enlace (Opcional)')
                        ->url() // Validación de URL
                        ->nullable(),

                    Forms\Components\Toggle::make('is_active')
                        ->label('Banner Activo')
                        ->helperText('Solo los banners activos se mostrarán en la página.')
                        ->required()
                        ->default(true),

                    Forms\Components\TextInput::make('display_order')
                        ->label('Orden de Visualización')
                        ->numeric()
                        ->required()
                        ->default(0)
                        ->helperText('Un número menor se muestra primero.'),
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_mobile')->label('Móvil'),
                Tables\Columns\ImageColumn::make('image_desktop')->label('Escritorio'),
                Tables\Columns\TextColumn::make('link')
                    ->label('Enlace')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true), // Ocultable
                Tables\Columns\ToggleColumn::make('is_active')->label('Activo'),
                Tables\Columns\TextColumn::make('display_order')
                    ->label('Orden')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('display_order', 'asc') // Ordenar por defecto
            ->reorderable('display_order')
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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }
}
