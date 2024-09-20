<?php

namespace App\Filament\Resources\AlbumResource\Pages;

use App\Filament\Resources\AlbumResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Saade\FilamentExtra\Concerns\HasParentResource; // [!code ex2 highlight]

class ListAlbums extends ListRecords
{
    use HasParentResource; // [!code ex2 highlight]

    // (optional) Define custom relationship key (if it does not match the table name pattern). // [!code ex2 highlight]
    protected ?string $relationshipKey = 'artist_id'; // [!code ex2 highlight]

    // (optional) Define custom child page name prefix for child pages (if it does not match the parent resource slug). // [!code ex2 highlight]
    protected ?string $pageNamePrefix = 'album'; // [!code ex2 highlight]

    protected static string $resource = AlbumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
