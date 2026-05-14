<?php

namespace App\Filament\Pages;

use AbdulmajeedJamaan\FilamentTranslatableTabs\TranslatableTabs;
use App\Filament\Support\TextEditor;
use App\Models\Settings as SettingsModel;
use Dotswan\MapPicker\Fields\Map;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Pages\Page;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\DB;

class Settings extends Page implements HasForms
{
    use InteractsWithFormActions;
    use InteractsWithForms;

    protected string $view = 'filament.pages.settings';

    protected static ?string $slug = 'settings';

    public ?array $data = [];

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-cog-6-tooth';
    }

    public static function getNavigationSort(): int
    {
        return 1;
    }

    public static function getNavigationLabel(): string
    {
        return __('app.label.main_settings');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('app.label.administration');
    }

    public function getTitle(): string
    {
        return __('app.label.main_settings');
    }

    public function mount(): void
    {
        $this->form->fill($this->getSettingsData());
    }

    protected function getForms(): array
    {
        return ['form'];
    }

    protected function getSettingsData(): array
    {
        $data = [];

        foreach (SettingsModel::all() as $setting) {
            data_set($data, $setting->key, $setting->value);
        }

        return $data;
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('settings')
                    ->schema([
                        $this->seoTab(),
                        $this->contactsTab(),
                        $this->mapTab(),
                        $this->brandingTab(),
                        $this->metricsTab(),
                    ]),
            ])
            ->statePath('data');
    }

    protected function seoTab(): Tabs\Tab
    {
        return Tabs\Tab::make(__('app.label.tab_seo'))
            ->schema([
                TranslatableTabs::make('seo_translations')
                    ->schema([
                        TextInput::make('seo.title')
                            ->label(__('app.label.seo_title'))
                            ->required(),

                        Textarea::make('seo.description')
                            ->label(__('app.label.seo_description'))
                            ->rows(4)
                            ->required(),

                        Textarea::make('seo.keywords')
                            ->label(__('app.label.seo_keywords'))
                            ->rows(4),
                    ]),

                Toggle::make('seo.indexing_enabled')
                    ->label(__('app.label.seo_indexing_enabled'))
                    ->helperText(__('app.helper.seo_indexing_enabled'))
                    ->default(true),

                FileUpload::make('seo.og_image')
                    ->label(__('app.label.seo_og_image'))
                    ->image()
                    ->imageEditor()
                    ->directory('og-images')
                    ->disk('public')
                    ->maxSize(2048)
                    ->previewable()
                    ->downloadable()
                    ->acceptedFileTypes(['image/png', 'image/jpeg'])
                    ->helperText(__('app.helper.seo_og_image')),
            ]);
    }

    protected function contactsTab(): Tabs\Tab
    {
        return Tabs\Tab::make(__('app.label.tab_contacts'))
            ->schema([
                TranslatableTabs::make('contacts_translations')
                    ->schema([
                        TextInput::make('site.name')
                            ->label(__('app.label.site_name')),

                        Textarea::make('site.description')
                            ->label(__('app.label.site_description'))
                            ->rows(6),

                        Textarea::make('contacts.address')
                            ->label(__('app.label.contacts_address'))
                            ->rows(2),

                        Textarea::make('contacts.working_plan')
                            ->label(__('app.label.contacts_working_plan'))
                            ->rows(2),

                        Textarea::make('footer.text')
                            ->label(__('app.label.footer_text'))
                            ->rows(3),

                        TextEditor::make('footer.free_numbers_text', 'settings')
                            ->label(__('app.label.footer_free_numbers_text'))
                            ->helperText(__('app.helper.html_allowed'))
                            ->extraInputAttributes([
                                'style' => 'min-height: 12rem; max-height: 35vh; overflow-y: auto;',
                            ]),
                    ]),
            ]);
    }

    protected function mapTab(): Tabs\Tab
    {
        return Tabs\Tab::make(__('app.label.tab_map'))
            ->schema([
                Map::make('map.coordinates')
                    ->label(__('app.label.map_coordinates'))
                    ->defaultLocation(latitude: 41.311081, longitude: 69.240562)
                    ->zoom(17)
                    ->minZoom(3)
                    ->maxZoom(19)
                    ->draggable(true)
                    ->clickable(true)
                    ->showMarker(true)
                    ->showZoomControl(true)
                    ->showFullscreenControl(true)
                    ->showMyLocationButton(true)
                    ->detectRetina(true)
                    ->extraStyles(['min-height: 60vh', 'border-radius: 0.5rem']),
            ]);
    }

    protected function brandingTab(): Tabs\Tab
    {
        return Tabs\Tab::make(__('app.label.tab_branding'))
            ->schema([
                FileUpload::make('branding.logo_header')
                    ->label(__('app.label.logo_header'))
                    ->image()
                    ->imageEditor()
                    ->directory('logos')
                    ->disk('public')
                    ->maxSize(2048)
                    ->previewable()
                    ->downloadable(),

                FileUpload::make('branding.logo_footer')
                    ->label(__('app.label.logo_footer'))
                    ->image()
                    ->imageEditor()
                    ->directory('logos')
                    ->disk('public')
                    ->maxSize(2048)
                    ->previewable()
                    ->downloadable(),
            ]);
    }

    protected function metricsTab(): Tabs\Tab
    {
        return Tabs\Tab::make(__('app.label.tab_metrics'))
            ->schema([
                Textarea::make('metrics.yandex')
                    ->label(__('app.label.metrics_yandex'))
                    ->rows(6)
                    ->helperText(__('app.helper.metrics_yandex')),

                Textarea::make('metrics.google')
                    ->label(__('app.label.metrics_google'))
                    ->rows(6)
                    ->helperText(__('app.helper.metrics_google')),
            ]);
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        $data = $this->form->getState();

        DB::transaction(fn () => $this->saveSettings($data));

        clear_settings_cache();

        Notification::make()
            ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
            ->success()
            ->send();
    }

    protected function saveSettings(array $data, string $prefix = ''): void
    {
        foreach ($data as $key => $value) {
            $fullKey = $prefix === '' ? $key : "{$prefix}.{$key}";

            if (is_array($value) && $this->isAssociativeArray($value)) {
                $this->saveSettings($value, $fullKey);

                continue;
            }

            SettingsModel::set($fullKey, $value);
        }
    }

    protected function isAssociativeArray(array $arr): bool
    {
        if ($arr === []) {
            return false;
        }

        return array_keys($arr) !== range(0, count($arr) - 1);
    }
}
