<?php

namespace App\View\Components\Navbar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Side extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $rawMenus = [
            [
                'name_key' => 'messages.profile',
                'icon_svg' => '<svg class="w-7 h-7 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>',
                'order' => 1,
                'children' => [
                    ['name_key' => 'messages.about', 'route_name' => 'profile.about', 'image_url' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=300&q=80', 'subtitle' => null, 'order' => 1],
                    ['name_key' => 'messages.manajemen', 'route_name' => 'profile.manajemen', 'image_url' => 'https://binus.ac.id/wp-content/uploads/2021/10/294-1-gokampuscom.png', 'subtitle' => null, 'order' => 2],
                    ['name_key' => 'messages.struktur_manajemen', 'route_name' => 'profile.struktur', 'image_url' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=300&q=80', 'subtitle' => null, 'order' => 3],
                    ['name_key' => 'messages.entitas_bisnis', 'route_name' => 'profile.entitas', 'image_url' => 'https://images.unsplash.com/photo-1560179707-f14e90ef3623?auto=format&fit=crop&w=300&q=80', 'subtitle' => null, 'order' => 4],
                ]
            ],
            [
                'name_key' => 'messages.investor',
                'icon_svg' => '<svg class="w-7 h-7 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>',
                'order' => 2,
                'children' => [
                    ['name_key' => 'messages.anggaran_dasar', 'subtitle' => 'Jadwal Pelaksanaan Rapat Direksi', 'route_name' => 'investor.anggaran_dasar', 'image_url' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=400&q=80', 'order' => 1],
                    ['name_key' => 'messages.laporan', 'subtitle' => 'Laporan Tahunan & Keuangan', 'route_name' => 'investor.laporan', 'image_url' => 'https://api.ruangmenyala.com/api/uploads/on-c2-s3-ruangmenyala-prod/fc2fcc7c-1c69-4741-a890-a8d25050765d/cara%20melihat%20grafik%20saham.jpg', 'order' => 2],
                    ['name_key' => 'messages.ppid', 'subtitle' => 'Informasi Publik', 'route_name' => 'investor.ppid', 'image_url' => 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&w=400&q=80', 'order' => 3],
                ]
            ],
            [
                'name_key' => 'messages.tata_kelola',
                'icon_svg' => '<svg class="w-7 h-7 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>',
                'order' => 3,
                'children' => [
                    ['name_key' => 'messages.pedoman_tata_kelola', 'route_name' => 'tk.pedoman', 'image_url' => 'https://images.unsplash.com/photo-1589829085413-56de8ae18c73?auto=format&fit=crop&w=300&q=80', 'subtitle' => null, 'order' => 1],
                    ['name_key' => 'messages.kode_etik_bisnis', 'route_name' => 'tk.kode_etik', 'image_url' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=300&q=80', 'subtitle' => null, 'order' => 2],
                    ['name_key' => 'messages.wbs', 'route_name' => 'tk.wbs', 'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaRAi80JEvZK8Kf2J5OxVfdOqsExRoNSKq5NuZljXBiyWVhMShieeukNtn&s=10', 'subtitle' => null, 'order' => 3],
                    ['name_key' => 'messages.kebijakan_smt', 'route_name' => 'tk.kebijakan_smt', 'image_url' => 'https://blog.tempoinstitute.com/wp-content/uploads/2025/11/Tempo-Institute-33.jpg', 'subtitle' => null, 'order' => 4],
                    ['name_key' => 'messages.rups', 'route_name' => 'tk.rups', 'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcvfZeg8VyQbEtMPGzkZH_eWkIMy2vqMtn9RKQjWcyRBqRSlRy-Nll9VGv&s=10', 'subtitle' => null, 'order' => 5],
                ]
            ],
            [
                'name_key' => 'messages.pjsl',
                'icon_svg' => '<svg class="w-7 h-7 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>',
                'order' => 4,
                'children' => [
                    ['name_key' => 'messages.program_pjsl', 'route_name' => 'pjsl.index', 'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYSN7vtQ4KRcftJbKUfd6Yj2mpYvUVHRv3kyitxXYBptYy7L4Lsj8SVRKG&s=10', 'subtitle' => null, 'order' => 1],
                ]
            ],
            [
                'name_key' => 'messages.media',
                'icon_svg' => '<svg class="w-7 h-7 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H15"></path></svg>',
                'order' => 5,
                'children' => [
                    ['name_key' => 'messages.siaran_pers', 'route_name' => 'media.siaran_pers', 'image_url' => 'https://www.humasindonesia.id/images/berita/humas-indonesia-tak-cuma-kampanye-ini-peran-humas-politik-65.jpeg', 'subtitle' => null, 'order' => 1],
                    ['name_key' => 'messages.pemberitaan_media', 'route_name' => 'media.pemberitaan', 'image_url' => 'https://st.depositphotos.com/2082031/2353/i/450/depositphotos_23532785-stock-photo-covering-an-event-with-a.jpg', 'subtitle' => null, 'order' => 2],
                ]
            ],
            [
                'name_key' => 'messages.layanan',
                'icon_svg' => '<svg class="w-7 h-7 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>',
                'order' => 6,
                'children' => [
                    ['name_key' => 'messages.layanan', 'route_name' => 'layanan.index', 'image_url' => 'https://scm-underwaterwork.com/wp-content/uploads/2024/01/service-underwater-2.jpg', 'subtitle' => null, 'order' => 1],
                    ['name_key' => 'messages.branch', 'route_name' => 'layanan.branch', 'image_url' => 'https://media.kontainerindonesia.co.id/wp-content/uploads-blog/2023/05/Masalah-yang-sering-terjadi-di-pelabuhan.webp', 'subtitle' => null, 'order' => 2],
                ]
            ],
        ];

        $menus = json_decode(json_encode($rawMenus));

        return view('components.navbar.side', compact('menus'));
    }
}
