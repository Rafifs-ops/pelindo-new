<x-layout>
    <style>
        .tree ul {
            padding-top: 24px; 
            position: relative;
            transition: all 0.5s;
        }

        .tree li {
            float: left; 
            text-align: center;
            list-style-type: none;
            position: relative;
            padding: 24px 8px 0 8px;
            transition: all 0.5s;
        }

        /* Connecting lines */
        .tree li::before, .tree li::after {
            content: '';
            position: absolute; 
            top: 0; 
            right: 50%;
            border-top: 3px solid #0066AE;
            width: 50%; 
            height: 24px;
        }
        .tree li::after {
            right: auto; 
            left: 50%;
            border-left: 3px solid #0066AE;
        }

        .tree li:only-child::after, .tree li:only-child::before {
            display: none;
        }
        .tree li:only-child { 
            padding-top: 0; 
        }
        
        .tree li:first-child::before, .tree li:last-child::after {
            border: 0 none;
        }
        .tree li:last-child::before {
            border-right: 3px solid #0066AE;
            border-radius: 0 12px 0 0;
        }
        .tree li:first-child::after {
            border-radius: 12px 0 0 0;
        }

        .tree ul ul::before {
            content: '';
            position: absolute; 
            top: 0; 
            left: 50%;
            border-left: 3px solid #0066AE;
            width: 0; 
            height: 24px;
        }

        .tree li a {
            padding: 16px 28px;
            text-decoration: none;
            color: #1E293B;
            font-size: 14px;
            font-weight: 700;
            display: inline-block;
            background-color: #FFFFFF;
            border-radius: 20px;
            box-shadow: 
                6px 10px 24px -2px rgba(5, 94, 170, 0.1),
                -4px -4px 14px 0px rgba(255, 255, 255, 0.95),
                inset 1px 1px 2px rgba(255, 255, 255, 0.9);
            border: 2px solid rgba(255, 255, 255, 0.9);
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .tree li a:hover {
            transform: translateY(-4px);
            background: #0066AE; 
            color: white; 
            box-shadow: 
                8px 14px 28px -2px rgba(0, 102, 174, 0.35),
                inset 1px 1px 2px rgba(255, 255, 255, 0.4);
            border-color: rgba(255, 255, 255, 0.3);
        }
        .tree li a:hover+ul li a {
            border-color: #0066AE;
        }
    </style>

    <x-frontend.jumbotron>
        <x-slot name="title">{{ __('messages.struktur_manajemen') }}</x-slot>
        <x-slot name="subtitle">Struktur Organisasi Perusahaan</x-slot>
    </x-frontend.jumbotron>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 -mt-16 relative z-20 overflow-x-auto">
        <div class="clay-card p-8 sm:p-12 bg-white/90 border-2 border-white overflow-x-auto min-w-[850px]">
            <div class="tree flex justify-center py-6">
                <ul>
                    <li>
                        <a href="#" class="!bg-gradient-to-r !from-[#0F243C] !to-[#00528C] !text-white border-none !text-lg !px-10 !py-4 shadow-xl">
                            Dewan Komisaris
                        </a>
                        <ul>
                            <li>
                                <a href="#" class="!bg-gradient-to-r !from-[#0066AE] !to-[#00A3E0] !text-white border-none !text-base !px-8 !py-3.5 shadow-lg">
                                    Direktur Utama
                                </a>
                                <ul>
                                    <li><a href="#">Direktur Keuangan</a></li>
                                    <li><a href="#">Direktur Operasi</a></li>
                                    <li><a href="#">Direktur SDM</a></li>
                                    <li><a href="#">Direktur Teknik</a></li>
                                    <li><a href="#">Direktur Komersial</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-layout>
