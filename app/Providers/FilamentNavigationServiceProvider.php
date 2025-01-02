<?php 

namespace App\Providers;

use App\Models\Page;
use App\Models\Section;
use Illuminate\Routing\Route;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\ServiceProvider;
use Filament\Navigation\NavigationGroup;

class FilamentNavigationServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Filament::serving(function () {
            Filament::registerNavigationGroups([
                NavigationGroup::make()
                     ->label('Home')
                     ->icon('heroicon-s-home'),
                NavigationGroup::make()
                    ->label('About')
                    ->icon('heroicon-s-pencil'),
                NavigationGroup::make()
                    ->label('Forms')
                    ->icon('heroicon-o-document-chart-bar'),
                NavigationGroup::make()
                    ->label('Corporate')
                    ->icon('heroicon-o-building-office-2'),
                NavigationGroup::make()
                    ->label('Workshop')
                    ->icon('heroicon-m-calendar-days'),
                NavigationGroup::make()
                    ->label('Student Corner')
                    ->icon('heroicon-o-user-group'),

                NavigationGroup::make()
                    ->label('Contact Us')
                    ->icon('heroicon-c-user'),
            ]);
        });

        

        // Filament::serving(function () {
        //     Filament::registerNavigationItems([
        //         NavigationItem::make('Analytics')
        //             ->url('https://filament.pirsch.io', shouldOpenInNewTab: true)
        //             // ->icon('heroicon-o-presentation-chart-line')
        //             // ->activeIcon('heroicon-s-presentation-chart-line')
        //             ->group('ssss')
        //             ->sort(3),
        //     ]);
        // });

        Filament::serving(function () {
            $pages = Page::orderBy('order')->get();

        $navigationItems = [];

        // Loop through all pages
        foreach ($pages as $page) {
            // Get sections for each page ordered by the 'order' column
            $navigation = Section::where('page_id', $page->id)
                ->orderBy('order')
                ->get();

            // Loop through sections and create navigation items
            foreach ($navigation as $nav) {
                $navigationItems[] = NavigationItem::make($nav->section_name)
                    ->url(route('filament.admin.resources.sections.edit', $nav->id))
                    ->group($page->name)
                    ->isActiveWhen(function () use ($nav) {
                        return route('filament.admin.resources.sections.edit', $nav->id) == request()->url();
                    })
                    ->sort($nav->order);
            }
        }

        // Register all navigation items at once
        Filament::registerNavigationItems($navigationItems);
    });

    }
}
