<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->label('تصویر')
                    ->image()
//                    ->multiple()
                    ->disk('public')
                    ->directory('img/category')
                    ->visibility('public')
                    ->reorderable()
                    ->maxFiles(10)
                    ->imageEditor()
                    ->imageEditorEmptyFillColor('transparent')
                    ->circleCropper()
                    ->imageCropAspectRatio('16:5'),

                TextInput::make('title')
                    ->label('عنوان')
                    ->required()
                    ->columnStart(1),
                Select::make('table')
                    ->label('جدول')
                    ->options([
                        'products' => 'محصولات',
                    ]),
                Select::make('visible')
                    ->label('نمایش')
                    ->options([
                        '0' => 'بله',
                        'admin' => 'خیر',
                    ])
            ]);

    }
}
