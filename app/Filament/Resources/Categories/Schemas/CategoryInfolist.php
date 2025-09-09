<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CategoryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('image')
                    ->label('تصویر')
                    ->disk('public')
                    ->visibility('public'),
                TextEntry::make('title')->label('عنوان')->columnStart(1),
                TextEntry::make('table')->label('جدول'),
                IconEntry::make('visible')
                    ->label('نمایش')
                    ->boolean()
                    ->trueColor('info')//->falseIcon('')
                    ->falseColor('danger')->columnSpan(1),
            ]);
    }
}
