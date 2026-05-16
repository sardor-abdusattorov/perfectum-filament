<?php

namespace Database\Seeders;

use App\Models\Tender;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class TendersSeeder extends Seeder
{
    /**
     * Mapping of tender slugs to their legacy publication dates.
     * Sourced from the menu_pages.created_date column of the legacy CMS.
     */
    private array $legacyDates = [
        'office-equipment-procurement-notice-2022' => '2022-06-19 19:00:00',
        'diesel-generator-1250-kva-supplier' => '2024-02-29 19:00:00',
        'office-furniture-and-infrastructure-supplier' => '2024-03-04 19:00:00',
        'ups-room-renovation-and-construction-works' => '2024-03-04 19:00:00',
        'ultrawide-monitors-34-inch-supplier' => '2024-03-04 19:00:00',
        'oversized-cargo-transportation-services' => '2024-03-11 19:00:00',
        'video-conferencing-hardware-system-supplier' => '2024-03-11 19:00:00',
        'datacenter-network-switches-supplier-2024-03' => '2024-03-18 19:00:00',
        'datacenter-firewalls-supplier-2024-03' => '2024-03-18 19:00:00',
        'servers-and-virtualization-software-supplier' => '2024-03-28 19:00:00',
        'public-ipv4-addresses-supplier' => '2024-03-31 19:00:00',
        'public-ipv4-addresses-supplier-en' => '2024-03-31 19:00:00',
        'computer-and-office-equipment-supplier-perfectum-mobile' => '2024-04-01 19:00:00',
        '5g-sa-network-construction-and-modernization-services' => '2024-04-01 19:00:00',
        'construction-tools-and-household-goods-supplier' => '2024-04-02 19:00:00',
        'automated-warehouse-accounting-system-supplier' => '2024-04-03 19:00:00',
        'dpi-content-filtering-equipment-supplier-mcpk-2024-04' => '2024-04-17 19:00:00',
        'optical-measuring-instruments-supplier' => '2024-04-24 19:00:00',
        'datacenter-firewalls-supplier' => '2024-04-29 19:00:00',
        'servers-supplier' => '2024-04-29 19:00:00',
        'datacenter-network-switches-supplier' => '2024-04-29 19:00:00',
        'diesel-forklift-supplier' => '2024-04-29 19:00:00',
        'datacenter-virtualization-system-supplier-2024-05' => '2024-05-06 19:00:00',
        'video-surveillance-system-supplier-2024-05-09' => '2024-05-09 19:00:00',
        'roof-major-repair-services-communication-facility' => '2024-05-29 19:00:00',
        'sim-cards-and-esim-profiles-supplier' => '2024-05-30 19:00:00',
        'video-surveillance-system-supplier-2024-05-30' => '2024-05-30 19:00:00',
        'fire-protection-systems-electrical-room-ups-contractor' => '2024-06-12 19:00:00',
        'travel-agency-business-trip-services-supplier' => '2024-06-18 19:00:00',
        'rfi-endpoint-protection-software' => '2024-06-18 19:00:00',
        'copper-cable-products-supplier' => '2024-06-19 19:00:00',
        'datacenter-virtualization-system-supplier' => '2024-07-02 19:00:00',
        'endpoint-protection-software-supplier' => '2024-07-04 19:00:00',
        'sms-center-supplier' => '2024-07-23 19:00:00',
        'sprinkler-fire-extinguishing-system-restoration-works' => '2024-07-24 19:00:00',
        'dpi-content-filtering-equipment-supplier-mcpk' => '2024-08-18 19:00:00',
        'holobox-supplier' => '2024-08-18 19:00:00',
        'li-ion-48v-100ah-batteries-supplier' => '2024-08-21 19:00:00',
        'corporate-website-development-5g-sa' => '2024-08-22 19:00:00',
        'agm-12v-100ah-batteries-supplier' => '2024-09-05 19:00:00',
        'call-center-organization-and-first-line-services-supplier' => '2024-10-02 19:00:00',
        'computer-and-office-equipment-supplier' => '2024-10-02 19:00:00',
        'corporate-datacenter-virtualization-licenses-supplier' => '2024-10-22 19:00:00',
        'measuring-instruments-and-tools-supplier' => '2024-10-29 19:00:00',
        'petrol-and-diesel-mobile-generators-supplier' => '2024-11-10 19:00:00',
        'data-storage-system-supplier' => '2024-11-13 19:00:00',
        'datacenter-equipment-insurance-services-supplier' => '2024-11-17 19:00:00',
        'voluntary-medical-insurance-services' => '2024-11-26 19:00:00',
        'air-conditioners-18000-btu-low-voltage-supplier' => '2025-01-07 19:00:00',
        'sales-functions-outsourcing-services-supplier' => '2025-01-07 19:00:00',
        'data-leak-protection-software-supplier' => '2025-01-07 19:00:00',
        'forti-token-mobile-two-factor-authentication-supplier' => '2025-01-07 19:00:00',
        'civil-protection-equipment-supplier' => '2025-01-19 19:00:00',
        'ott-tv-and-video-on-demand-services-supplier' => '2025-01-26 19:00:00',
        'windows-tablet-computers-supplier' => '2025-02-02 19:00:00',
        'rfi-ifrs-accounting-policy-and-audit-services' => '2025-02-09 19:00:00',
        'automated-electricity-metering-system-askue-supplier' => '2025-02-18 19:00:00',
        'vulnerability-management-software-supplier' => '2025-02-18 19:00:00',
        'modular-ups-30-kw-supplier' => '2025-03-23 19:00:00',
        'ip-channels-lease-services-supplier' => '2025-03-24 19:00:00',
        'cpe-fwa-equipment-manufacturer-supplier' => '2025-03-24 19:00:00',
        'tax-consulting-services-supplier' => '2025-04-01 19:00:00',
        'solar-power-stations-supplier' => '2025-04-09 19:00:00',
        'three-phase-electricity-meters-ex518-supplier' => '2025-04-10 19:00:00',
        'video-surveillance-and-access-control-system-supplier' => '2025-04-13 19:00:00',
        'passenger-elevator-replacement-contractor' => '2025-04-16 19:00:00',
        'fiber-optic-lines-design-construction-contractors' => '2025-04-17 19:00:00',
        'split-air-conditioners-18000-btu-low-voltage-supplier' => '2025-04-20 19:00:00',
        'modular-ups-120-kva-supplier' => '2025-04-21 19:00:00',
        'smm-seo-targeted-contextual-advertising-services' => '2025-04-23 19:00:00',
        'cdn-content-delivery-network-access-services' => '2025-04-23 19:00:00',
        'fire-protection-systems-transport-hubs-contractor' => '2025-04-23 19:00:00',
        'datacenter-backup-software-supplier' => '2025-04-30 19:00:00',
        'asphalt-paving-and-drainage-works' => '2025-05-14 19:00:00',
        'advertising-materials-exhibition-products-supplier' => '2025-05-29 19:00:00',
        'advertising-materials-exhibition-products-relaunch' => '2025-06-25 19:00:00',
        'endpoint-protection-software-license-renewal' => '2025-07-02 19:00:00',
        'vmware-datacenter-virtualization-license-renewal' => '2025-08-05 19:00:00',
        'office-cleaning-outsourcing-services' => '2025-10-01 19:00:00',
        'fiber-optic-lines-maintenance-contractors' => '2025-11-06 19:00:00',
        'nsbu-ifrs-reporting-audit-services' => '2025-12-11 19:00:00',
        'cpe-fwa-equipment-manufacturer-supplier-2026' => '2026-01-11 19:00:00',
        'smm-promotion-and-advertising-design-services' => '2026-02-01 19:00:00',
        'electronic-document-management-supplier' => '2026-02-04 19:00:00',
        '5g-sa-smartphones-supplier' => '2026-02-15 19:00:00',
        '5g-sa-smartphones-manufacturer' => '2026-02-15 19:00:00',
        '5g-sa-smartphones-supplier-5000-pieces' => '2026-03-04 19:00:00',
        '5g-sa-smartphones-manufacturer-5000-units' => '2026-03-04 19:00:00',
        '5kw-solar-power-station-base-stations' => '2026-03-10 19:00:00',
        'lifepo4-batteries-for-base-stations' => '2026-03-17 19:00:00',
        'outdoor-48v-dc-power-systems' => '2026-03-17 19:00:00',
        'digital-marketing-services-tender' => '2026-04-06 19:00:00',
        'rfi-erp-implementation-services' => '2026-04-19 19:00:00',
    ];

    public function run(): void
    {
        $tenders = require database_path('seeders/data/tenders.php');

        foreach ($tenders as $sort => $row) {
            $tender = Tender::updateOrCreate(
                ['slug' => $row['slug']],
                [
                    'title' => $row['title'],
                    'content' => $row['content'],
                    'image' => null,
                    'published_at' => $row['published_at']
                        ?? $this->legacyDates[$row['slug']]
                        ?? now()->subDays($sort),
                    'sort' => $sort + 1,
                    'is_published' => $row['is_published'] ?? true,
                ],
            );

            $tender->files()->delete();

            foreach ($row['files'] ?? [] as $fileSort => $file) {
                $this->relocateLegacyFile($file['file']);

                $tender->files()->create([
                    'name' => $file['name'],
                    'file' => $file['file'],
                    'sort' => $fileSort,
                ]);
            }
        }

        $this->command?->info('Imported ' . count($tenders) . ' tenders.');
    }

    /**
     * Move a file imported from the old site (flat `files/` folder) into the
     * current upload structure. Idempotent: skips if already in place.
     */
    private function relocateLegacyFile(string $path): void
    {
        $disk = Storage::disk('public');

        if ($disk->exists($path)) {
            return;
        }

        $legacy = 'files/' . basename($path);

        if ($disk->exists($legacy)) {
            $disk->makeDirectory(dirname($path));
            $disk->copy($legacy, $path);
        }
    }
}
