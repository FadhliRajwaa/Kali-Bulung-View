{{-- Testimonials Section (Optional) --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Kata 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-blue-600">
                    Mereka
                </span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Dengarkan pengalaman pengunjung yang telah merasakan keindahan Kali Bulung View
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg animate-on-scroll">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        @endfor
                    </div>
                </div>
                <p class="text-gray-600 mb-4 italic">
                    "Tempat yang sangat nyaman untuk berlibur bersama keluarga. Air kolam renangnya jernih dan segar, pemandangannya juga indah!"
                </p>
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-gradient-to-r from-teal-400 to-blue-400 rounded-full flex items-center justify-center text-white font-bold">
                        A
                    </div>
                    <div class="ml-3">
                        <p class="font-semibold text-gray-900">Ani Susanti</p>
                        <p class="text-sm text-gray-500">Ibu Rumah Tangga</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg animate-on-scroll delay-100">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        @endfor
                    </div>
                </div>
                <p class="text-gray-600 mb-4 italic">
                    "Harga tiket sangat terjangkau dengan fasilitas yang lengkap. Anak-anak sangat senang bermain di sini!"
                </p>
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-gradient-to-r from-green-400 to-teal-400 rounded-full flex items-center justify-center text-white font-bold">
                        B
                    </div>
                    <div class="ml-3">
                        <p class="font-semibold text-gray-900">Budi Santoso</p>
                        <p class="text-sm text-gray-500">Ayah 2 Anak</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg animate-on-scroll delay-200">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        @endfor
                    </div>
                </div>
                <p class="text-gray-600 mb-4 italic">
                    "Suasananya tenang dan asri, cocok banget buat refresh dari kepenatan kota. Akan kembali lagi!"
                </p>
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full flex items-center justify-center text-white font-bold">
                        C
                    </div>
                    <div class="ml-3">
                        <p class="font-semibold text-gray-900">Citra Dewi</p>
                        <p class="text-sm text-gray-500">Mahasiswa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
