<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->label('تصویر')
                    ->image()
                    ->multiple()
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
                    ->required()->columnStart(1),

                Select::make('category_id')
                    ->label('دسته بندی')
                    ->relationship('category', 'title')
                    ->required()
                    ->options(fn(callable $get) => \App\Models\Category::query()
                        ->when(1, function ($query) {
                            // Filter categories as needed when conditions are met
                            $query->where('type', 'contents')->where('visible', 1);
                        })
                        ->pluck('title', 'id')
                    ),

                TextInput::make('price')
                    ->numeric()
                    ->minValue(1)
                    ->step(0.01)
                    ->required(),

                TextInput::make('off')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(100)
                    ->step(1)
                    ->required(),


                Select::make('visible')
                    ->label('نمایش')
                    ->options([
                        '0' => 'بله',
                        '1' => 'خیر',
                    ])
            ]);
    }
}
