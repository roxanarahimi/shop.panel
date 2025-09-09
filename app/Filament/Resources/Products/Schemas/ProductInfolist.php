<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('images')
                    ->label('تصاویر')
                    ->disk('public')
                    ->visibility('public')
                    ->getStateUsing(fn ($record) => $record->images ?? [])
                    ->columnSpan(5),

                TextEntry::make('title')->label('عنوان')->columnStart(1)->columnSpan(1),
                TextEntry::make('category.title')->label('دسته بندی')->columnSpan(1),
                TextEntry::make('price')->label('قیمت')->columnSpan(1),
                TextEntry::make('off')->label('تخفیف')->columnSpan(1),
                IconEntry::make('visible')
                    ->label('نمایش')
                    ->boolean()
                    ->trueColor('info')//->falseIcon('')
                    ->falseColor('danger')->columnSpan(1),

                TextEntry::make('text')->label('متن')->html()->columnSpan(5)->columnStart(1),

            ]);
    }
}
