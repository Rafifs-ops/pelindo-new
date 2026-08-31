<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Branch;

class BranchSeeder extends Seeder
{
    public function run(): void
    {
        $branches = [];

        // PT Pelabuhan Tanjung Priok (5 places)
        for ($i = 1; $i <= 5; $i++) {
            $branches[] = [
                'name' => 'Cabang Tanjung Priok ' . $i,
                'parent_company' => 'PT Pelabuhan Tanjung Priok',
                'address' => 'Jl. Pelabuhan Raya No. ' . $i . ', Jakarta Utara, Indonesia',
                'dock_length' => (200 + ($i * 50)) . ' meter',
                'stacking_area' => (5000 + ($i * 1000)) . ' m2',
                'image_url' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=600&q=80',
            ];
        }

        // PT Indonesia Kendaraan Terminal (10 places)
        for ($i = 1; $i <= 10; $i++) {
            $branches[] = [
                'name' => 'Terminal Kendaraan ' . $i,
                'parent_company' => 'PT Indonesia Kendaraan Terminal',
                'address' => 'Kawasan Industri Otomotif Blok ' . chr(64+$i) . ', Karawang, Indonesia',
                'dock_length' => (150 + ($i * 20)) . ' meter',
                'stacking_area' => (10000 + ($i * 2000)) . ' m2',
                'image_url' => 'https://images.unsplash.com/photo-1560179707-f14e90ef3623?auto=format&fit=crop&w=600&q=80',
            ];
        }

        // PT Terminal Curah Utama (15 places)
        for ($i = 1; $i <= 15; $i++) {
            $branches[] = [
                'name' => 'Terminal Curah ' . $i,
                'parent_company' => 'PT Terminal Curah Utama',
                'address' => 'Kawasan Industri Cilegon No. ' . $i . ', Banten, Indonesia',
                'dock_length' => (300 + ($i * 10)) . ' meter',
                'stacking_area' => (8000 + ($i * 500)) . ' m2',
                'image_url' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&w=600&q=80',
            ];
        }

        foreach ($branches as $branch) {
            Branch::create($branch);
        }
    }
}
