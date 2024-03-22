<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class CustomFilamentBasePage extends Page
{
    // Common properties or methods for custom Filament pages

    protected static string $view = 'livewire.daboville-report';
    protected static ?string $title = 'DNA REPORTS';
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    public function getTitle(): string
    {
        return static::$title;
    }

    public static function getNavigationIcon(): string
    {
        return static::$navigationIcon;
    }

//    public function render(): \Illuminate\Contracts\Support\Renderable
//    {
//        return \Livewire::mount(static::$view); 
//    }


}
