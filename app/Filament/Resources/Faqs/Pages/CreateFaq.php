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
        if (empty($data['slug'])) {
            $source = $data['question']['en']
                ?? $data['question']['ru']
                ?? $data['question']['uz']
                ?? '';

            if ($source !== '') {
                $data['slug'] = mb_substr(Str::slug($source), 0, 64);
            }
        }

        return $data;
    }
}
