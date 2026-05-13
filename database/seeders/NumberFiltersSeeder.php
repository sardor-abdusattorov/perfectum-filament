<?php

namespace Database\Seeders;

use App\Enums\NumberFilterType;
use App\Models\NumberFilter;
use Illuminate\Database\Seeder;
class NumberFiltersSeeder extends Seeder
{
    public function run(): void
    {
        $rows = array_merge(
            // Образцы номеров (data_type=1)
            array_map(
                fn (string $v) => [$v, $v, NumberFilterType::Number->value],
                ['1079', '1089', '1099'],
            ),

            // Ценовые категории (data_type=3) — name содержит пробел для отображения
            [
                ['10 000', '1000',  NumberFilterType::Price->value],
                ['20 000', '20000', NumberFilterType::Price->value],
                ['30 000', '30000', NumberFilterType::Price->value],
                ['40 000', '40000', NumberFilterType::Price->value],
            ],

            // Префиксы (data_type=2)
            array_map(
                fn (string $v) => [$v, $v, NumberFilterType::Prefix->value],
                [
                    '000', '001', '007', '077', '100', '101', '107', '110', '111', '115',
                    '116', '117', '121', '123', '124', '125', '126', '127', '128', '130',
                    '137', '140', '141', '142', '143', '150', '155', '157', '160', '170',
                    '177', '180', '188', '189', '190', '198', '200', '210', '251', '260',
                    '261', '270', '271', '272', '273', '274', '275', '276', '277', '278',
                    '279', '300', '301', '302', '303', '304', '305', '306', '307', '308',
                    '309', '310', '311', '312', '313', '314', '331', '335', '337', '338',
                    '360', '361', '362', '363', '364', '365', '366', '367', '368', '369',
                    '475', '520', '558', '560', '561', '570', '571', '573', '575', '576',
                    '577', '700', '707', '771', '772', '774', '775', '776', '777', '778',
                    '800', '808', '809', '812', '880', '888', '770', '070', '010', '717',
                    '999', '555', '333', '500', '222', '099', '444', '727', '788', '877',
                    '011', '020', '909',
                ],
            ),
        );

        foreach ($rows as $i => [$name, $value, $dataType]) {
            NumberFilter::updateOrCreate(
                ['data_type' => $dataType, 'value' => $value],
                [
                    'name'         => $name,
                    'sort'         => $i + 1,
                    'is_published' => true,
                ],
            );
        }

        $this->command?->info('Imported ' . count($rows) . ' number filters.');
    }
}
