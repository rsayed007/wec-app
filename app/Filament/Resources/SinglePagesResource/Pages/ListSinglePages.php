<?php

namespace App\Filament\Resources\SinglePagesResource\Pages;

use App\Filament\Resources\SinglePagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSinglePages extends ListRecords
{
    protected static string $resource = SinglePagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
