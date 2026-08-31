<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BranchSeeder::class,
        ]);

        // Seed Terminals
        $terminals = [
            [
                'name' => 'Terminal Curah Cair',
                'description' => 'Layanan terminal khusus untuk menangani muatan curah cair seperti CPO, bahan bakar minyak, dan bahan kimia cair lainnya. Dilengkapi dengan sistem perpipaan terpadu dan tangki timbun modern yang menjamin keamanan dan efisiensi bongkar muat.',
                'key_feature' => 'Sistem Perpipaan & Tangki Timbun',
            ],
            [
                'name' => 'Terminal Curah Kering',
                'description' => 'Fasilitas bongkar muat komoditas curah kering seperti batu bara, bijih besi, gandum, dan pupuk. Menggunakan peralatan mekanis berkapasitas tinggi seperti conveyor belt dan grab crane untuk produktivitas maksimal.',
                'key_feature' => 'Conveyor Belt & Grab Crane',
            ],
            [
                'name' => 'Terminal Kendaraan',
                'description' => 'Terminal yang didesain khusus (Dedicated Terminal) untuk melayani bongkar muat kendaraan bermotor (Car Terminal) secara Roll-on/Roll-off (Ro-Ro). Menyediakan lapangan penumpukan luas dengan sistem keamanan 24 jam.',
                'key_feature' => 'Layanan Ro-Ro & Area Penumpukan Luas',
            ],
            [
                'name' => 'Terminal Khusus',
                'description' => 'Layanan yang disesuaikan untuk industri tertentu yang memiliki kebutuhan spesifik di luar layanan terminal umum. Dirancang terintegrasi dengan kawasan industri untuk menekan biaya logistik.',
                'key_feature' => 'Integrasi Kawasan Industri',
            ],
            [
                'name' => 'Terminal Multipurpose',
                'description' => 'Terminal serbaguna yang mampu melayani berbagai jenis muatan, mulai dari general cargo, bag cargo, hingga peti kemas secara terbatas. Menawarkan fleksibilitas tinggi untuk berbagai kebutuhan logistik.',
                'key_feature' => 'Fleksibilitas Berbagai Jenis Muatan',
            ],
            [
                'name' => 'Terminal Untuk Kepentingan Sendiri',
                'description' => 'Fasilitas pelabuhan yang dioperasikan untuk melayani kegiatan operasional dan distribusi produk dari perusahaan atau instansi tertentu (TUKS). Mendukung efisiensi rantai pasok internal perusahaan.',
                'key_feature' => 'Efisiensi Rantai Pasok Internal',
            ],
        ];

        foreach ($terminals as $t) {
            \App\Models\Terminal::create($t);
        }

        // Seed Articles (Press Releases & Media News)
        $articles = [
            ['type' => 'press_release', 'title' => 'Kinerja Positif PMT di Triwulan Pertama', 'content' => 'PMT mencatat pertumbuhan kinerja operasional pada triwulan pertama tahun ini, didukung oleh peningkatan arus barang logistik.', 'date' => '2026-03-15'],
            ['type' => 'press_release', 'title' => 'Inovasi Digitalisasi Pelabuhan Terintegrasi', 'content' => 'Langkah baru PMT dalam mengimplementasikan sistem digital terintegrasi di seluruh cabang demi mempercepat layanan kepelabuhanan.', 'date' => '2026-04-20'],
            ['type' => 'press_release', 'title' => 'PMT Resmikan Fasilitas Baru di Makassar', 'content' => 'Untuk meningkatkan efisiensi dan kapasitas bongkar muat di wilayah timur Indonesia, PMT secara resmi mengoperasikan fasilitas baru yang canggih.', 'date' => '2026-05-15'],
            ['type' => 'media_news', 'title' => 'PMT Menjadi Pilar Konektivitas Logistik Nasional', 'content' => 'Liputan khusus dari media nasional mengenai peran strategis PMT sebagai operator multipurpose terkemuka di tanah air.', 'date' => '2026-05-10'],
            ['type' => 'media_news', 'title' => 'Penghargaan Tata Kelola Perusahaan Terbaik 2026', 'content' => 'PMT meraih penghargaan prestisius atas komitmennya yang kuat dalam menjaga tata kelola perusahaan yang bersih (Good Corporate Governance).', 'date' => '2026-06-01'],
        ];

        foreach ($articles as $a) {
            \App\Models\Article::create($a);
        }

        // Seed Reports
        $reports = [
            ['title' => 'Laporan Tahunan Terintegrasi (Annual Report) 2025', 'year' => '2025'],
            ['title' => 'Laporan Keuangan Tahunan 2025', 'year' => '2025'],
            ['title' => 'Laporan Keberlanjutan (Sustainability Report) 2025', 'year' => '2025'],
            ['title' => 'Laporan Tahunan (Annual Report) 2024', 'year' => '2024'],
            ['title' => 'Laporan Keuangan Tahunan 2024', 'year' => '2024'],
            ['title' => 'Laporan Keberlanjutan 2024', 'year' => '2024'],
            ['title' => 'Laporan Tahunan (Annual Report) 2023', 'year' => '2023'],
            ['title' => 'Laporan Keuangan Tahunan 2023', 'year' => '2023'],
            ['title' => 'Laporan Tahunan 2022', 'year' => '2022'],
            ['title' => 'Laporan Keuangan Tahunan 2022', 'year' => '2022'],
        ];

        foreach ($reports as $r) {
            \App\Models\Report::create($r);
        }
        // Seed Directors
        $directors = [
            ['name' => 'John Doe', 'position' => 'Direktur Utama', 'image_url' => 'https://randomuser.me/api/portraits/men/1.jpg'],
            ['name' => 'Jane Smith', 'position' => 'Direktur Keuangan', 'image_url' => 'https://randomuser.me/api/portraits/women/2.jpg'],
            ['name' => 'Michael Johnson', 'position' => 'Direktur Operasi', 'image_url' => 'https://randomuser.me/api/portraits/men/3.jpg'],
            ['name' => 'Emily Davis', 'position' => 'Direktur SDM', 'image_url' => 'https://randomuser.me/api/portraits/women/4.jpg'],
            ['name' => 'David Wilson', 'position' => 'Direktur Teknik', 'image_url' => 'https://randomuser.me/api/portraits/men/5.jpg'],
            ['name' => 'Sarah Brown', 'position' => 'Direktur Komersial', 'image_url' => 'https://randomuser.me/api/portraits/women/6.jpg'],
        ];

        foreach ($directors as $d) {
            \App\Models\Director::create($d);
        }

        // Seed Documents (Pedoman & RUPS)
        $documents = [
            // Pedoman
            ['type' => 'pedoman', 'title' => 'Pedoman Tata Kelola Perusahaan Terpadu', 'year' => '2024'],
            ['type' => 'pedoman', 'title' => 'Pedoman Manajemen Risiko', 'year' => '2023'],
            ['type' => 'pedoman', 'title' => 'Pedoman Audit Internal', 'year' => '2023'],
            ['type' => 'pedoman', 'title' => 'Pedoman Pengadaan Barang dan Jasa', 'year' => '2022'],
            
            // RUPS
            ['type' => 'rups', 'title' => 'Risalah RUPS Tahunan 2025', 'year' => '2025'],
            ['type' => 'rups', 'title' => 'Risalah RUPS Luar Biasa 1 2025', 'year' => '2025'],
            ['type' => 'rups', 'title' => 'Risalah RUPS Luar Biasa 2 2025', 'year' => '2025'],
            ['type' => 'rups', 'title' => 'Risalah RUPS Luar Biasa 3 2025', 'year' => '2025'],
            ['type' => 'rups', 'title' => 'Risalah RUPS Luar Biasa 4 2025', 'year' => '2025'],
            ['type' => 'rups', 'title' => 'Risalah RUPS Tahunan 2024', 'year' => '2024'],
            ['type' => 'rups', 'title' => 'Risalah RUPS Luar Biasa 1 2024', 'year' => '2024'],
            ['type' => 'rups', 'title' => 'Risalah RUPS Luar Biasa 2 2024', 'year' => '2024'],
            ['type' => 'rups', 'title' => 'Risalah RUPS Luar Biasa 3 2024', 'year' => '2024'],
            ['type' => 'rups', 'title' => 'Risalah RUPS Luar Biasa 4 2024', 'year' => '2024'],
            ['type' => 'rups', 'title' => 'Risalah RUPS Tahunan 2023', 'year' => '2023'],
            ['type' => 'rups', 'title' => 'Risalah RUPS Luar Biasa 1 2023', 'year' => '2023'],
            ['type' => 'rups', 'title' => 'Risalah RUPS Luar Biasa 2 2023', 'year' => '2023'],
            ['type' => 'rups', 'title' => 'Risalah RUPS Luar Biasa 3 2023', 'year' => '2023'],
            ['type' => 'rups', 'title' => 'Risalah RUPS Luar Biasa 4 2023', 'year' => '2023'],
        ];

        foreach ($documents as $doc) {
            \App\Models\Document::create($doc);
        }

        // Seed Meeting Schedules
        $meetings = [
            ['title' => 'Rapat Direksi Q1', 'date' => '2026-03-15', 'location' => 'Kantor Pusat PMT', 'agenda' => 'Evaluasi Kinerja Q1'],
            ['title' => 'Rapat Direksi Q2', 'date' => '2026-06-15', 'location' => 'Kantor Pusat PMT', 'agenda' => 'Evaluasi Kinerja Q2'],
            ['title' => 'Rapat Direksi Q3', 'date' => '2026-09-15', 'location' => 'Kantor Pusat PMT', 'agenda' => 'Evaluasi Kinerja Q3'],
            ['title' => 'Rapat Direksi Q4', 'date' => '2026-12-15', 'location' => 'Kantor Pusat PMT', 'agenda' => 'Evaluasi Kinerja Q4'],
        ];

        foreach ($meetings as $m) {
            \App\Models\MeetingSchedule::create($m);
        }
    }
}
