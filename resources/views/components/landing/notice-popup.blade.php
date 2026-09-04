<!-- Notice / Pengumuman Pop-up Modal (Frameless - Mounted on Homepage) -->
<div x-data="{
        open: false,
        dontShowAgain: false,
        currentIndex: 0,
        notices: [
            {
                src: '{{ asset('images/notices/popup_pelindo_1.jpg') }}',
                alt: 'Deklarasi Komitmen GCG PT Pelindo Multi Terminal',
                title: 'Deklarasi Komitmen GCG'
            },
            {
                src: '{{ asset('images/notices/popup_pelindo_2.jpg') }}',
                alt: 'Komitmen Bersama Dewan Komisaris dan Direksi Tentang Implementasi Manajemen Risiko',
                title: 'Komitmen Bersama Manajemen Risiko'
            }
        ],
        init() {
            // Periksa apakah pengguna telah memilih 'Jangan tampilkan lagi hari ini'
            const hideUntil = localStorage.getItem('pelindo_notice_hide_until');
            if (hideUntil && new Date().getTime() < parseInt(hideUntil, 10)) {
                return;
            }

            // Munculkan pop up otomatis saat halaman selesai dimuat (on mounted)
            setTimeout(() => {
                this.open = true;
            }, 350);

            // Kunci scroll halaman ketika modal terbuka
            this.$watch('open', value => {
                document.body.classList.toggle('overflow-hidden', value);
            });
        },
        close() {
            if (this.dontShowAgain) {
                // Simpan preferensi untuk 24 jam ke depan
                const expireTime = new Date().getTime() + (24 * 60 * 60 * 1000);
                localStorage.setItem('pelindo_notice_hide_until', expireTime.toString());
            }
            this.open = false;
        },
        next() {
            this.currentIndex = (this.currentIndex + 1) % this.notices.length;
        },
        prev() {
            this.currentIndex = (this.currentIndex - 1 + this.notices.length) % this.notices.length;
        }
    }"
    x-cloak
    @keydown.escape.window="if(open) close()"
    @keydown.arrow-left.window="if(open) prev()"
    @keydown.arrow-right.window="if(open) next()"
    class="relative">

    <!-- Modal Backdrop & Dialog Container -->
    <div x-show="open" 
         class="fixed inset-0 z-[70] flex items-center justify-center p-4 sm:p-6 md:p-8 overflow-y-auto"
         role="dialog" 
         aria-modal="true"
         aria-labelledby="modal-notice-title">
        
        <!-- Backdrop Overlay with Frosted Glass -->
        <div x-show="open"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="close()"
             class="fixed inset-0 bg-slate-950/75 backdrop-blur-md transition-opacity"
             aria-hidden="true"></div>

        <!-- Center Frameless Popup Container -->
        <div x-show="open"
             x-transition:enter="ease-out duration-300 transform"
             x-transition:enter-start="opacity-0 scale-95 translate-y-3"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             x-transition:leave="ease-in duration-200 transform"
             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
             x-transition:leave-end="opacity-0 scale-95 translate-y-3"
             class="relative z-10 w-auto max-w-sm sm:max-w-md md:max-w-lg mx-auto flex flex-col items-center my-auto transition-all">

            <!-- Frameless Image & Floating Controls Wrapper -->
            <div class="relative w-full flex items-center justify-center select-none group">

                <!-- Floating Close Button (Top-Right) -->
                <button @click="close()" 
                        aria-label="Tutup Pengumuman"
                        class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 z-30 w-9 h-9 sm:w-10 sm:h-10 bg-black/60 hover:bg-[#0066AE] text-white rounded-full flex items-center justify-center backdrop-blur-md transition-all duration-200 hover:scale-110 active:scale-95 shadow-[0_4px_15px_rgba(0,0,0,0.4)] border border-white/40">
                    <svg class="w-5 h-5 transition-transform duration-200 group-hover:rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                
                <!-- Notice Posters (Pure Image, Frameless) -->
                <div class="w-full flex items-center justify-center">
                    <template x-for="(notice, index) in notices" :key="index">
                        <div x-show="currentIndex === index"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 scale-98"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 scale-100"
                             x-transition:leave-end="opacity-0 scale-98"
                             class="w-full flex flex-col items-center justify-center">
                            
                            <img :src="notice.src" 
                                 :alt="notice.alt" 
                                 class="max-h-[74vh] sm:max-h-[80vh] w-auto max-w-full object-contain rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.6)] cursor-pointer bg-white ring-1 ring-white/10"
                                 @click="window.open(notice.src, '_blank')"
                                 title="Klik untuk melihat poster ukuran penuh">
                        </div>
                    </template>
                </div>

                <!-- Carousel Navigation Arrows (Floating) -->
                <template x-if="notices.length > 1">
                    <div>
                        <!-- Prev Button -->
                        <button @click="prev()" 
                                aria-label="Poster Sebelumnya"
                                class="absolute -left-3 sm:-left-5 top-1/2 -translate-y-1/2 z-20 w-9 h-9 sm:w-11 sm:h-11 bg-black/60 hover:bg-[#0066AE] text-white rounded-full flex items-center justify-center shadow-[0_4px_16px_rgba(0,0,0,0.4)] backdrop-blur-md transition-all duration-200 hover:scale-110 active:scale-95 border border-white/30">
                            <svg class="w-5 h-5 -translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>

                        <!-- Next Button -->
                        <button @click="next()" 
                                aria-label="Poster Berikutnya"
                                class="absolute -right-3 sm:-right-5 top-1/2 -translate-y-1/2 z-20 w-9 h-9 sm:w-11 sm:h-11 bg-black/60 hover:bg-[#0066AE] text-white rounded-full flex items-center justify-center shadow-[0_4px_16px_rgba(0,0,0,0.4)] backdrop-blur-md transition-all duration-200 hover:scale-110 active:scale-95 border border-white/30">
                            <svg class="w-5 h-5 translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </template>
            </div>

            <!-- Frameless Bottom Bar (Floating controls below image) -->
            <div class="mt-3.5 flex items-center justify-between w-full px-2 sm:px-1 gap-2">
                <label class="flex items-center space-x-2 text-xs sm:text-sm text-white/90 hover:text-white cursor-pointer select-none drop-shadow-md">
                    <input type="checkbox" 
                           x-model="dontShowAgain" 
                           class="rounded border-white/30 bg-black/40 text-[#0066AE] focus:ring-[#0066AE] h-4 w-4 transition-colors cursor-pointer accent-[#0066AE]">
                    <span>Jangan tampilkan lagi hari ini</span>
                </label>

                <!-- Dots & Counter Indicator Floating Below Image -->
                <template x-if="notices.length > 1">
                    <div class="flex items-center space-x-2 bg-black/50 px-3 py-1 rounded-full backdrop-blur-md border border-white/20">
                        <template x-for="(notice, index) in notices" :key="index">
                            <button @click="currentIndex = index"
                                    :class="currentIndex === index ? 'w-5 bg-[#38BDF8]' : 'w-1.5 bg-white/60 hover:bg-white'"
                                    class="h-1.5 rounded-full transition-all duration-300 focus:outline-none"
                                    :aria-label="'Buka pengumuman ' + (index + 1)"></button>
                        </template>
                        <span class="text-white/80 text-[11px] font-bold ml-1">
                            <span x-text="currentIndex + 1"></span>/<span x-text="notices.length"></span>
                        </span>
                    </div>
                </template>

                <button @click="close()" 
                        class="bg-white/20 hover:bg-white/30 active:bg-white/40 text-white border border-white/30 backdrop-blur-md px-4 py-1 rounded-full text-xs font-bold transition-all duration-200 hover:scale-105 active:scale-95 shadow-md">
                    Tutup
                </button>
            </div>

        </div>
    </div>
</div>
