<?php

namespace App\Filament\Resources\CareerCounsellingResource\Pages;

use App\Filament\Resources\CareerCounsellingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCareerCounselling extends EditRecord
{
    protected static string $resource = CareerCounsellingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
