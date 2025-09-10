<?php

namespace App\Filament\Resources\Transactions\Tables;

use App\Filament\Resources\Orders\OrderResource;
use App\Filament\Resources\Users\UserResource;
use App\Http\Controllers\DateController;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TransactionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order.code')
                    ->label('کد سفارش')
                    ->url(fn ($record) => OrderResource::getUrl('view', ['record' => $record->order_id]))->color('info')
                    ->searchable()
                    ->sortable()
               ,
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
                TextColumn::make('status')
                    ->label('وضعیت'),
                TextColumn::make('tracking_number')
                    ->label('کد پیگیری'),
                TextColumn::make('created_at')
                    ->label('تاریخ ثبت')
                    ->formatStateUsing(fn($state) => (new DateController())->toPersian1($state)),


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
