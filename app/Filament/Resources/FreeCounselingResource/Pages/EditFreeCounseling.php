<?php

namespace App\Filament\Resources\FreeCounselingResource\Pages;

use App\Filament\Resources\FreeCounselingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFreeCounseling extends EditRecord
{
    protected static string $resource = FreeCounselingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
