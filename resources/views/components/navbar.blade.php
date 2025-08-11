<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo & Brand -->
            <div class="flex items-center">
                <div class="flex-shrink-0 mr-4">
                    <div class="w-10 h-10 bg-gradient-to-br from-water-400 to-water-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                </div>
                <div>
                    <h1 class="navbar-brand text-xl font-bold">Kali Bulung View</h1>
                    <p class="text-sm navbar-brand">Wisata Kolam Renang</p>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="#home" class="navbar-link text-sm font-medium hover:text-water-400 transition-colors">Home</a>
                <a href="#tentang" class="navbar-link text-sm font-medium hover:text-water-400 transition-colors">Tentang</a>
                <a href="#fasilitas" class="navbar-link text-sm font-medium hover:text-water-400 transition-colors">Fasilitas</a>
                <a href="#galeri" class="navbar-link text-sm font-medium hover:text-water-400 transition-colors">Galeri</a>
                <a href="#lokasi" class="navbar-link text-sm font-medium hover:text-water-400 transition-colors">Lokasi</a>
                <a href="#kontak" class="bg-water-500 text-white px-6 py-2 rounded-lg font-medium hover:bg-water-600 transition-colors">Kontak</a>
            </div>

            <!-- Mobile menu button -->
            <div class="lg:hidden">
                <button id="mobile-menu-btn" class="p-2 rounded-md focus:outline-none">
                    <div class="hamburger-icon">
                        <span class="block w-6 h-0.5 mb-1"></span>
                        <span class="block w-6 h-0.5 mb-1"></span>
                        <span class="block w-6 h-0.5"></span>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="lg:hidden fixed inset-0 z-[9999] bg-white">
        <!-- Header -->
        <div class="flex items-center justify-between p-4 bg-white border-b border-gray-100 sticky top-0 z-10">
            <div class="flex items-center">
                <div class="w-8 h-8 bg-gradient-to-br from-teal-500 to-teal-600 rounded-lg flex items-center justify-center mr-3">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Kali Bulung View</h3>
                    <p class="text-xs text-gray-600">Wisata Kolam Renang</p>
                </div>
            </div>
            <button id="mobile-menu-close" class="p-2 rounded-lg hover:bg-gray-100 transition-colors">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
        <!-- Navigation Links -->
        <div class="flex-1 overflow-y-auto bg-white">
            <div class="p-4 space-y-2">
                <a href="#home" class="mobile-nav-link flex items-center w-full p-4 text-gray-700 hover:bg-teal-50 hover:text-teal-700 rounded-lg transition-all duration-200 group">
                    <div class="w-10 h-10 bg-teal-50 group-hover:bg-teal-100 rounded-lg flex items-center justify-center mr-4 transition-colors">
                        <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="font-medium text-lg">Home</div>
                        <div class="text-sm text-gray-500">Halaman utama</div>
                    </div>
                    <svg class="w-5 h-5 text-gray-400 group-hover:text-teal-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>

                <a href="#tentang" class="mobile-nav-link flex items-center w-full p-4 text-gray-700 hover:bg-teal-50 hover:text-teal-700 rounded-lg transition-all duration-200 group">
                    <div class="w-10 h-10 bg-teal-50 group-hover:bg-teal-100 rounded-lg flex items-center justify-center mr-4 transition-colors">
                        <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="font-medium text-lg">Tentang</div>
                        <div class="text-sm text-gray-500">Informasi wisata</div>
                    </div>
                    <svg class="w-5 h-5 text-gray-400 group-hover:text-teal-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>

                <a href="#fasilitas" class="mobile-nav-link flex items-center w-full p-4 text-gray-700 hover:bg-teal-50 hover:text-teal-700 rounded-lg transition-all duration-200 group">
                    <div class="w-10 h-10 bg-teal-50 group-hover:bg-teal-100 rounded-lg flex items-center justify-center mr-4 transition-colors">
                        <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="font-medium text-lg">Fasilitas</div>
                        <div class="text-sm text-gray-500">Fasilitas tersedia</div>
                    </div>
                    <svg class="w-5 h-5 text-gray-400 group-hover:text-teal-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>

                <a href="#galeri" class="mobile-nav-link flex items-center w-full p-4 text-gray-700 hover:bg-teal-50 hover:text-teal-700 rounded-lg transition-all duration-200 group">
                    <div class="w-10 h-10 bg-teal-50 group-hover:bg-teal-100 rounded-lg flex items-center justify-center mr-4 transition-colors">
                        <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="font-medium text-lg">Galeri</div>
                        <div class="text-sm text-gray-500">Foto dan gambar</div>
                    </div>
                    <svg class="w-5 h-5 text-gray-400 group-hover:text-teal-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>

                <a href="#lokasi" class="mobile-nav-link flex items-center w-full p-4 text-gray-700 hover:bg-teal-50 hover:text-teal-700 rounded-lg transition-all duration-200 group">
                    <div class="w-10 h-10 bg-teal-50 group-hover:bg-teal-100 rounded-lg flex items-center justify-center mr-4 transition-colors">
                        <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="font-medium text-lg">Lokasi</div>
                        <div class="text-sm text-gray-500">Alamat dan peta</div>
                    </div>
                    <svg class="w-5 h-5 text-gray-400 group-hover:text-teal-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Bottom Contact Button -->
        <div class="p-4 bg-white border-t border-gray-100">
            <a href="#kontak" class="mobile-nav-link flex items-center justify-center w-full py-4 px-6 bg-gradient-to-r from-teal-600 to-teal-700 text-white rounded-xl hover:from-teal-700 hover:to-teal-800 transition-all duration-300 font-semibold text-lg shadow-lg">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Hubungi Kami
            </a>
        </div>
    </div>
</nav>

<script>
// Fallback mobile menu functionality (inline script for immediate availability)
document.addEventListener('DOMContentLoaded', function() {
    // Wait a moment for other scripts to load
    setTimeout(function() {
        // Check if mobile menu functions exist, if not create them
        if (typeof window.openMobileMenu === 'undefined') {
            console.log('Creating fallback mobile menu functions...');
            
            window.openMobileMenu = function() {
                const menu = document.getElementById('mobile-menu');
                const hamburger = document.querySelector('.hamburger-icon');
                if (menu) {
                    menu.classList.add('active');
                    document.body.style.overflow = 'hidden';
                }
                if (hamburger) hamburger.classList.add('open');
            };
            
            window.closeMobileMenu = function() {
                const menu = document.getElementById('mobile-menu');
                const hamburger = document.querySelector('.hamburger-icon');
                if (menu) {
                    menu.classList.remove('active');
                    document.body.style.overflow = '';
                }
                if (hamburger) hamburger.classList.remove('open');
            };
            
            // Add event listeners
            const menuBtn = document.getElementById('mobile-menu-btn');
            const closeBtn = document.getElementById('mobile-menu-close');
            
            if (menuBtn) {
                menuBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    window.openMobileMenu();
                });
            }
            
            if (closeBtn) {
                closeBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    window.closeMobileMenu();
                });
            }
        }
    }, 500);
});
</script>
