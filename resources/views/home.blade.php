@extends('layouts.app')

@section('title', 'Wisata Kolam Renang Kali Bulung View - Kelurahan Plalangan')
@section('description', 'Nikmati kesegaran dan keindahan alam di Wisata Kolam Renang Kali Bulung View, Kelurahan Plalangan. Fasilitas lengkap untuk rekreasi keluarga dengan pemandangan alam yang menakjubkan.')

@section('content')
<!-- Hero Section -->
<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 bg-fixed" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.3)), url('{{ asset('images/kolam_renang_landscape/landscape-1.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
    </div>

    <!-- Content -->
    <div class="relative z-10 text-center text-white px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto fade-in-up">
        <h1 class="text-4xl sm:text-5xl lg:text-7xl font-bold mb-6">
            <span class="block">Kali Bulung View</span>
            <span class="block text-2xl sm:text-3xl lg:text-4xl text-teal-300 font-medium mt-2">
                Wisata Kolam Renang
            </span>
        </h1>
        <p class="text-lg sm:text-xl lg:text-2xl mb-8 max-w-2xl mx-auto text-gray-200">
            Nikmati kesegaran air alami dan keindahan pemandangan alam di tengah suasana yang tenang dan asri
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#fasilitas" class="bg-teal-600 hover:bg-teal-700 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                Lihat Fasilitas
            </a>
            <a href="#kontak" class="border-2 border-white text-white hover:bg-white hover:text-gray-900 px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105">
                Hubungi Kami
            </a>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
        <a href="#tentang" class="text-white hover:text-teal-300 transition-colors">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </a>
    </div>
</section>

<!-- About Section -->
<section id="tentang" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Image -->
            <div class="fade-in-up">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/kolam_renang_landscape/landscape-2.jpg') }}" 
                         alt="Pemandangan Kali Bulung View" 
                         class="w-full h-80 lg:h-96 object-cover transform hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                </div>
            </div>

            <!-- Content -->
            <div class="fade-in-up">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Tentang 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-blue-600">
                        Kali Bulung View
                    </span>
                </h2>
                <div class="space-y-4 text-gray-600 text-lg leading-relaxed">
                    <p>
                        Wisata Kolam Renang Kali Bulung View berlokasi di Kelurahan Plalangan, 
                        menawarkan pengalaman wisata air yang unik dengan pemandangan alam yang menakjubkan. 
                        Dikelilingi oleh kehijauan alami dan suasana pedesaan yang asri.
                    </p>
                    <p>
                        Dengan air yang jernih dan segar, kolam renang ini merupakan destinasi sempurna 
                        untuk melepas penat bersama keluarga. Nikmati kesejukan air alami sambil 
                        menikmati pemandangan sekitar yang mempesona.
                    </p>
                    <p>
                        Kami berkomitmen untuk memberikan pengalaman wisata yang aman, nyaman, 
                        dan tak terlupakan bagi setiap pengunjung dengan fasilitas yang lengkap 
                        dan pelayanan yang ramah.
                    </p>
                </div>
                <div class="mt-8">
                    <a href="#fasilitas" class="inline-flex items-center bg-gradient-to-r from-teal-600 to-blue-600 hover:from-teal-700 hover:to-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Jelajahi Fasilitas
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Facilities Section -->
<section id="fasilitas" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 fade-in-up">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Fasilitas 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-blue-600">
                    Lengkap
                </span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Nikmati berbagai fasilitas yang telah kami sediakan untuk kenyamanan dan kepuasan Anda
            </p>
        </div>

        <!-- Facilities Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($facilities as $index => $facility)
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 fade-in-up ">
                <div class="relative overflow-hidden rounded-t-2xl">
                    <img src="{{ asset($facility['image']) }}" 
                         alt="{{ $facility['name'] }}" 
                         class="w-full h-48 object-cover transform hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute top-4 left-4 text-4xl">
                        {{ $facility['icon'] }}
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $facility['name'] }}</h3>
                    <p class="text-gray-600 leading-relaxed">{{ $facility['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section id="galeri" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 fade-in-up">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Galeri 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-blue-600">
                    Foto
                </span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Saksikan keindahan dan suasana Kali Bulung View melalui koleksi foto-foto kami
            </p>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @if(count($filteredGallery) > 0)
                @foreach($filteredGallery as $index => $image)
                <div class="gallery-item relative group cursor-pointer bg-gradient-to-br from-water-100 to-water-200 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500 ease-out fade-in-up"
                     style="animation-delay: {{ $index * 100 }}ms;">
                    <div class="aspect-w-4 aspect-h-3 w-full h-64">
                        <img src="{{ asset($image) }}" 
                             alt="Galeri Kali Bulung View {{ $index + 1 }}" 
                             class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110"
                             loading="lazy"
                             style="background: linear-gradient(45deg, #f0fdfa, #ccfbf1); min-height: 100%;">
                    </div>
                    
                    <!-- Overlay with zoom icon -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 ease-out">
                        <div class="absolute bottom-4 left-4 right-4 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 ease-out">
                            <p class="text-sm font-medium">Kali Bulung View</p>
                            <p class="text-xs opacity-80">Foto {{ $index + 1 }}</p>
                        </div>
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white opacity-0 group-hover:opacity-100 transition-all duration-500 ease-out scale-75 group-hover:scale-100">
                            <div class="bg-white/20 backdrop-blur-sm rounded-full p-3">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-span-full text-center py-16">
                    <div class="animate-pulse">
                        <div class="mx-auto h-12 w-12 text-water-400">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <p class="mt-4 text-gray-500">Memuat galeri foto...</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

<!-- Location Section -->
<section id="lokasi" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 fade-in-up">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Lokasi 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-blue-600">
                    Kami
                </span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Temukan kami di lokasi yang mudah dijangkau di Kelurahan Plalangan
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-start">
            <!-- Map -->
            <div class="fade-in-up">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-96 bg-gray-200 flex items-center justify-center">
                        <!-- Replace this with actual Google Maps embed -->
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.274726618819!2d110.41804!3d-7.066667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c7b3f1a7c83%3A0x8e1b8f4c5a9d6e2f!2sPlalangan%2C%20Gunungpati%2C%20Semarang%20City%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1234567890123!5m2!1sen!2sid"
                            width="100%" 
                            height="384" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h-96">
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- Location Info -->
            <div class="fade-in-up space-y-6">
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Informasi Lokasi</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Alamat</h4>
                                <p class="text-gray-600">
                                    Kelurahan Plalangan<br>
                                    Kecamatan Gunungpati<br>
                                    Kota Semarang, Jawa Tengah
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Jam Operasional</h4>
                                <p class="text-gray-600">
                                    Setiap Hari: 08:00 - 17:00 WIB<br>
                                    <span class="text-sm text-green-600">Buka sepanjang minggu</span>
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Harga Tiket</h4>
                                <p class="text-gray-600">
                                    Dewasa: Rp 15.000<br>
                                    Anak-anak: Rp 10.000<br>
                                    <span class="text-sm text-gray-500">Harga sudah termasuk akses semua fasilitas</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Directions Button -->
                <a href="https://maps.google.com/directions/?api=1&destination=Plalangan,Gunungpati,Semarang" 
                   target="_blank" 
                   class="block w-full bg-gradient-to-r from-teal-600 to-blue-600 hover:from-teal-700 hover:to-blue-700 text-white text-center py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Dapatkan Petunjuk Arah
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="kontak" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 fade-in-up">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Hubungi 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-blue-600">
                    Kami
                </span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Ada pertanyaan atau ingin melakukan reservasi? Jangan ragu untuk menghubungi kami
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="fade-in-up">
                <div class="bg-gradient-to-br from-teal-50 to-blue-50 rounded-2xl p-8 shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Kirim Pesan</h3>
                    
                    @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form id="contact-form" action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   required 
                                   value="{{ old('name') }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-colors @error('name') border-red-500 @enderror">
                            @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   required 
                                   value="{{ old('email') }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-colors @error('email') border-red-500 @enderror">
                            @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                            <textarea id="message" 
                                      name="message" 
                                      rows="5" 
                                      required 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-colors @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                            @error('message')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-teal-600 to-blue-600 hover:from-teal-700 hover:to-blue-700 text-white py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="fade-in-up space-y-6">
                <!-- WhatsApp -->
                <div class="bg-white rounded-2xl p-6 shadow-lg border-l-4 border-green-500">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">WhatsApp</h4>
                            <p class="text-gray-600 mb-2">Chat langsung dengan kami</p>
                            <a href="https://wa.me/628123456789" 
                               target="_blank" 
                               class="inline-flex items-center text-green-600 hover:text-green-700 font-medium">
                                +62 812-3456-789
                                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Instagram -->
                <div class="bg-white rounded-2xl p-6 shadow-lg border-l-4 border-pink-500">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-purple-400 to-pink-400 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987s11.987-5.367 11.987-11.987C24.014 5.367 18.647.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.328-1.297L6.77 14.043c.555.555 1.317.897 2.145.897 1.683 0 3.048-1.365 3.048-3.048s-1.365-3.048-3.048-3.048c-.828 0-1.59.342-2.145.897L5.12 8.093c.88-.807 2.031-1.297 3.328-1.297 2.718 0 4.92 2.201 4.92 4.92s-2.201 4.92-4.92 4.92zm7.718-1.23a.234.234 0 01-.234.234h-1.872a.234.234 0 01-.234-.234v-1.872c0-.129.105-.234.234-.234h1.872c.129 0 .234.105.234.234v1.872z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">Instagram</h4>
                            <p class="text-gray-600 mb-2">Follow untuk update foto terbaru</p>
                            <a href="https://instagram.com/kalibulungview" 
                               target="_blank" 
                               class="inline-flex items-center text-pink-600 hover:text-pink-700 font-medium">
                                @kalibulungview
                                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- TikTok -->
                <div class="bg-white rounded-2xl p-6 shadow-lg border-l-4 border-gray-900">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-black rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-.88-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1-.1z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">TikTok</h4>
                            <p class="text-gray-600 mb-2">Lihat video menarik aktivitas kami</p>
                            <a href="https://tiktok.com/@kalibulungview" 
                               target="_blank" 
                               class="inline-flex items-center text-gray-900 hover:text-gray-700 font-medium">
                                @kalibulungview
                                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Quick Contact Button -->
                <div class="bg-gradient-to-r from-teal-600 to-blue-600 rounded-2xl p-6 text-white text-center">
                    <h4 class="text-xl font-bold mb-2">Butuh Info Cepat?</h4>
                    <p class="mb-4 opacity-90">Hubungi kami langsung melalui WhatsApp</p>
                    <a href="https://wa.me/628123456789?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20Wisata%20Kolam%20Renang%20Kali%20Bulung%20View" 
                       target="_blank" 
                       class="inline-flex items-center bg-white text-teal-600 hover:bg-gray-100 px-6 py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                        <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                        </svg>
                        Chat Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
