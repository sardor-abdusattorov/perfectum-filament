<?php

namespace App\Filament\Resources\Faqs\Pages;

use App\Filament\Resources\Faqs\FaqResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateFaq extends CreateRecord
{
    protected static string $resource = FaqResource::class;


    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (empty($data['slug']) && ! empty($data['question']['ru'])) {
            $slug = Str::slug($data['question']['ru']);
            $data['slug'] = mb_substr($slug, 0, 64);
        }

        return $data;
    }
}
