<?php

namespace App\Filament\Resources\SinglePagesResource\Pages;

use App\Filament\Resources\SinglePagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSinglePages extends EditRecord
{
    protected static string $resource = SinglePagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
