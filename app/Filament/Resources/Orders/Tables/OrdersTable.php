<?php

namespace App\Filament\Resources\Orders\Tables;

use App\Filament\Resources\Users\UserResource;
use App\Http\Controllers\DateController;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class OrdersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('code')
                    ->label('کد سفارش')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('user.name')
                    ->label('نام کاربر')
                    ->url(fn ($record) => UserResource::getUrl('view', ['record' => $record->user_id]))->color('info')
                    ->openUrlInNewTab() // optional
//                    ->sortable()
                    ->searchable(),
                TextColumn::make('user.mobile')
                    ->label('موبایل')
                    ->openUrlInNewTab() // optional
//                    ->sortable()
                    ->searchable(),
                TextColumn::make('amount')
                    ->label('مبلغ'),
                TextColumn::make('payed')
                    ->label('پرداخت')
                    ->formatStateUsing(fn ($state) => $state ? 'بله' : 'خیر'),
                TextColumn::make('status')
                    ->label('وضعیت'),

                TextColumn::make('created_at')
                    ->label('تاریخ ثبت')
                    ->formatStateUsing(fn($state) => explode(' ', (new DateController())->toPersian($state))[0]),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
