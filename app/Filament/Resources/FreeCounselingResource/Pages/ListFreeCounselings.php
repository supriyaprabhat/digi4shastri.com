<?php

namespace App\Filament\Resources\FreeCounselingResource\Pages;

use App\Filament\Resources\FreeCounselingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFreeCounselings extends ListRecords
{
    protected static string $resource = FreeCounselingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
