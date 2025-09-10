<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Filament\Resources\Orders\OrderResource;
use App\Http\Controllers\DateController;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')->label('نام')->columnStart(1),
                TextEntry::make('mobile')->label('موبایل'),
                TextEntry::make('email')->label('ایمیل'),
                TextEntry::make('orders_link')->columnStart(1)
                    ->hiddenLabel() // hides the "orders_link" label
                    ->icon('heroicon-o-link')->iconColor('info')
                    ->state(fn ($record) => 'سفارش ها (' . $record->orders()->count() . ')')
                    ->url(fn($record) => '/admin/orders?search=' . $record->mobile)
                    ->color('info')->columnSpan(1),
                TextEntry::make('transactions_link')
                    ->hiddenLabel() // hides the "orders_link" label
                    ->icon('heroicon-o-link')->iconColor('info')
                    ->state(fn ($record) => 'تراکنش ها (' . $record->transactions()->count() . ')')
                    ->url(fn($record) => '/admin/transactions?search=' . $record->mobile)
                    ->color('info')->columnSpan(1),
                TextEntry::make('created_at')
                    ->label('تاریخ عضویت')
                    ->formatStateUsing(fn($state) => explode(' ', (new DateController())->toPersian($state))[0]),

                Section::make()
                    ->schema([
                        RepeatableEntry::make('addresses')
                            ->label('آدرس ها')
                            ->schema([
                                TextEntry::make('title')->label('عنوان'),
                                TextEntry::make('city.province.name')->label('استان'),
                                TextEntry::make('city.name')->label('شهر'),
                                TextEntry::make('details')->label('آدرس')->columnSpan(3),
                            ])
                            ->columns(6),
                    ])->columnSpan(6),


            ]);
    }
}
