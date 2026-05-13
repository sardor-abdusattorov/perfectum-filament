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
        return $this->autofillSlugFromQuestion($data);
    }

    /**
     * Если slug для какой-то локали пустой — автогенерируем
     * из question этой же локали через Str::slug().
     */
    protected function autofillSlugFromQuestion(array $data): array
    {
        $locales = ['ru', 'uz', 'en'];

        foreach ($locales as $locale) {
            $slug = $data['slug'][$locale] ?? null;
            $question = $data['question'][$locale] ?? null;

            if (empty($slug) && ! empty($question)) {
                $data['slug'][$locale] = mb_substr(Str::slug($question), 0, 64);
            }
        }

        return $data;
    }
}
