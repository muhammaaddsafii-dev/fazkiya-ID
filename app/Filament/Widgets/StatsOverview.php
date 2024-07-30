<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;
use App\Models\Product;
use App\Models\Testimonial;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $userCount = User::count();
        $productCount = Product::count();
        $testimonialCount = Testimonial::count();

        return [
            Stat::make('Jumlah User', $userCount)
                ->description('Total pengguna di sistem')
                ->descriptionIcon('heroicon-o-users')
                ->color('success'),
            Stat::make('Jumlah Produk', $productCount)
                ->description('Total produk yang tersedia')
                ->descriptionIcon('heroicon-o-shopping-cart')
                ->color('warning'),
            Stat::make('Jumlah Testimonial', $testimonialCount)
                ->description('Total testimonial yang dikumpulkan')
                ->descriptionIcon('heroicon-o-hand-thumb-up')
                ->color('danger'),
        ];
    }
}
