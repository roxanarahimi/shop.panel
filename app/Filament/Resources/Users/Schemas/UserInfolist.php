<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')->label('عنوان')->columnStart(1),
                TextEntry::make('mobile')->label('عنوان')->columnStart(1),

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
