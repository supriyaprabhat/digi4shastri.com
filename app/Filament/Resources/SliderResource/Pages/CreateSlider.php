<?php

namespace App\Filament\Resources\SliderResource\Pages;

use Filament\Actions;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use App\Filament\Resources\SliderResource;
use Filament\Resources\Pages\CreateRecord;
use Livewire\Features\SupportRedirects\Redirector;

class CreateSlider extends CreateRecord
{
    protected static string $resource = SliderResource::class;

    // public function render(): View
    // {
    //     // return
    //     // return view('welcome');
    //     dd('ihiuhi');

    // }


    // public function handleRecordCreation(array $request): Model
    // {
    //     dd($request);
    // }
}
