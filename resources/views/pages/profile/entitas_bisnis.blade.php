<x-layout>
    <x-frontend.jumbotron backgroundImage="https://images.unsplash.com/photo-1560179707-f14e90ef3623?auto=format&fit=crop&w=1920&q=80">
        <x-slot name="title">{{ __('messages.entitas_bisnis') }}</x-slot>
        <x-slot name="subtitle">Anak Perusahaan dan Entitas Bisnis PT Pelindo Multi Terminal</x-slot>
    </x-frontend.jumbotron>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 -mt-16 relative z-20">
        @if(app()->getLocale() == 'id')
            <div class="space-y-10">
                <!-- Parent Entity Card -->
                <div class="clay-card p-8 sm:p-12 bg-white relative overflow-hidden border-2 border-white">
                    <div class="inline-block mb-3">
                        <span class="clay-badge shadow-sm">Holding Multipurpose</span>
                    </div>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-[#0F243C] mb-6 tracking-tight">
                        PT Pelindo Multi Terminal
                    </h2>
                    <p class="text-slate-700 leading-relaxed text-base sm:text-lg font-normal">
                        PT Pelindo Multi Terminal / SPMT merupakan salah satu Subholding PT Pelabuhan Indonesia (Persero) yang dibentuk pada 1 Oktober 2021.
                        Pembentukan ini seiring dengan proses integrasi PT Pelabuhan Indonesia (Persero) yang kepemilikan sahamnya sepenuhnya dimiliki oleh Republik Indonesia. Komposisi kepemilikan saham PT Pelindo Multi Terminal adalah <strong>99,99%</strong> dimiliki oleh PT Pelabuhan Indonesia (Persero), dan <strong>0,01%</strong> dimiliki oleh PT Integrasi Logistik Cipta Solusi.                          
                        PT Pelindo Multi Terminal mengelola total 37 Branch Pelabuhan dan Terminal serta tiga anak perusahaan, yaitu PT Pelabuhan Tanjung Priok yang berpusat di Jakarta dan mengelola 10 cabang pelabuhan di pulau Sumatera & Jawa, PT Indonesia Kendaraan Terminal Tbk. yang mengelola terminal kendaraan di Jakarta dan beberapa daerah lain di Indonesia, dan Terminal Curah Utama.
                    </p>
                </div>

                <!-- Subsidiary Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="clay-card-interactive p-8 bg-white border-2 border-white flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 bg-[#E8F4FA] rounded-2xl flex items-center justify-center text-[#0066AE] font-extrabold text-lg mb-6 shadow-sm border border-white">
                                01
                            </div>
                            <h3 class="text-xl font-extrabold text-[#0F243C] mb-4 leading-snug">PT Indonesia Kendaraan Terminal Tbk</h3>
                            <p class="text-sm text-slate-600 leading-relaxed font-normal">
                                PT Indonesia Kendaraan Terminal Tbk adalah perusahaan yang terdedikasi menyediakan layanan Terminal RoRo / Kendaraan yang beroperasi di Pelabuhan Tanjung Priok, Jakarta, dan sejumlah Pelabuhan lainnya di wilayah Indonesia. Layanan yang diberikan meliputi Terminal Handling, Value Added Services, dan Sea Toll Services dengan standar kualitas pelayanan kelas dunia.
                            </p>
                        </div>
                    </div>

                    <div class="clay-card-interactive p-8 bg-white border-2 border-white flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 bg-[#E8F4FA] rounded-2xl flex items-center justify-center text-[#0066AE] font-extrabold text-lg mb-6 shadow-sm border border-white">
                                02
                            </div>
                            <h3 class="text-xl font-extrabold text-[#0F243C] mb-4 leading-snug">PT Pelabuhan Tanjung Priok</h3>
                            <p class="text-sm text-slate-600 leading-relaxed font-normal">
                                PT Pelabuhan Tanjung Priok (PTP Terminal Nonpetikemas) merupakan operator terminal multipurpose pertama di Indonesia dan berpengalaman dalam menangani kegiatan bongkar muat kargo curah cair, curah kering, general cargo dan lain-lain. PTP Nonpetikemas telah beroperasi di 10 Branch Pelabuhan yang tersebar di seluruh wilayah strategis Indonesia.
                            </p>
                        </div>
                    </div>

                    <div class="clay-card-interactive p-8 bg-white border-2 border-white flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 bg-[#E8F4FA] rounded-2xl flex items-center justify-center text-[#0066AE] font-extrabold text-lg mb-6 shadow-sm border border-white">
                                03
                            </div>
                            <h3 class="text-xl font-extrabold text-[#0F243C] mb-4 leading-snug">PT Terminal Curah Utama</h3>
                            <p class="text-sm text-slate-600 leading-relaxed font-normal">
                                PT Terminal Curah Utama adalah anak perusahaan PT Pelindo Multi Terminal yang saat ini mengelola Fuel facility Maintenance dan secara progresif akan terus mengembangkan jasa layanan multipurpose untuk memenuhi kebutuhan pasar multipurpose.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="space-y-10">
                <!-- Parent Entity Card -->
                <div class="clay-card p-8 sm:p-12 bg-white relative overflow-hidden border-2 border-white">
                    <div class="inline-block mb-3">
                        <span class="clay-badge shadow-sm">Multipurpose Holding</span>
                    </div>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-[#0F243C] mb-6 tracking-tight">
                        PT Pelindo Multi Terminal
                    </h2>
                    <p class="text-slate-700 leading-relaxed text-base sm:text-lg font-normal">
                        PT Pelindo Multi Terminal / SPMT is one of the Subholdings of PT Pelabuhan Indonesia (Persero) formed on October 1, 2021.
                        This formation is in line with the integration process of PT Pelabuhan Indonesia (Persero), whose shares are fully owned by the Republic of Indonesia. The share ownership composition of PT Pelindo Multi Terminal is <strong>99.99%</strong> owned by PT Pelabuhan Indonesia (Persero), and <strong>0.01%</strong> owned by PT Integrasi Logistik Cipta Solusi.
                        PT Pelindo Multi Terminal manages a total of 37 Port and Terminal Branches as well as three subsidiaries, namely PT Pelabuhan Tanjung Priok based in Jakarta and managing 10 port branches in Sumatra & Java, PT Indonesia Kendaraan Terminal Tbk. which manages vehicle terminals in Jakarta and several other areas in Indonesia, and Terminal Curah Utama.
                    </p>
                </div>

                <!-- Subsidiary Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="clay-card-interactive p-8 bg-white border-2 border-white flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 bg-[#E8F4FA] rounded-2xl flex items-center justify-center text-[#0066AE] font-extrabold text-lg mb-6 shadow-sm border border-white">
                                01
                            </div>
                            <h3 class="text-xl font-extrabold text-[#0F243C] mb-4 leading-snug">PT Indonesia Kendaraan Terminal Tbk</h3>
                            <p class="text-sm text-slate-600 leading-relaxed font-normal">
                                PT Indonesia Kendaraan Terminal Tbk is a dedicated company providing RoRo / Vehicle Terminal services operating at Tanjung Priok Port, Jakarta, and a number of other ports in Indonesia. Services provided include Terminal Handling, Value Added Services, and Sea Toll Services with world-class service quality standards.
                            </p>
                        </div>
                    </div>

                    <div class="clay-card-interactive p-8 bg-white border-2 border-white flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 bg-[#E8F4FA] rounded-2xl flex items-center justify-center text-[#0066AE] font-extrabold text-lg mb-6 shadow-sm border border-white">
                                02
                            </div>
                            <h3 class="text-xl font-extrabold text-[#0F243C] mb-4 leading-snug">PT Pelabuhan Tanjung Priok</h3>
                            <p class="text-sm text-slate-600 leading-relaxed font-normal">
                                PT Pelabuhan Tanjung Priok (PTP Non-Container Terminal) is the first multipurpose terminal operator in Indonesia and is experienced in handling loading and unloading activities for liquid bulk, dry bulk, general cargo and others. PTP Non-Container has operated in 10 Port Branches spread across strategic regions of Indonesia.
                            </p>
                        </div>
                    </div>

                    <div class="clay-card-interactive p-8 bg-white border-2 border-white flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 bg-[#E8F4FA] rounded-2xl flex items-center justify-center text-[#0066AE] font-extrabold text-lg mb-6 shadow-sm border border-white">
                                03
                            </div>
                            <h3 class="text-xl font-extrabold text-[#0F243C] mb-4 leading-snug">PT Terminal Curah Utama</h3>
                            <p class="text-sm text-slate-600 leading-relaxed font-normal">
                                PT Terminal Curah Utama is a subsidiary of PT Pelindo Multi Terminal which currently manages Fuel facility Maintenance and will progressively continue to develop multipurpose services to meet multipurpose market needs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</x-layout>
