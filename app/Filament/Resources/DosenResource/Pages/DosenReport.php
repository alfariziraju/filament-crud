<?php

namespace App\Filament\Resources\DosenResource\Pages;

use Filament\Resources\Pages\Page;
use App\Filament\Resources\DosenResource;

class DosenReport extends Page
{
   

    // Tambahkan ini:
    protected static string $resource = DosenResource::class;
    protected static string $view = 'filament.resources.dosen-resource.pages.dosen-report';

    protected static ?string $title = 'Laporan Data Dosen';

    public function getViewData(): array
    {
        return [
            'dosens' => \App\Models\Dosen::all(),
        ];
    }

    
}
