<footer class="bg-dark text-white pt-16 pb-8">
    <div class="container mx-auto max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
            {{-- Company Info --}}
            <div>
                <div class="flex items-center mb-6">
                    <div class="bg-white w-12 h-12 rounded-full flex items-center justify-center">
                        <img src="{{ asset('./logo.png') }}" alt="Logo" class="w-10 h-10">
                    </div>
                    <h1 class="ml-3 text-2xl font-serif font-bold text-white">pasar.id</h1>
                </div>
                <p class="text-gray-400 mb-6">
                    Platform digital untuk memberdayakan pengrajin lokal Yogyakarta dengan akses pasar yang lebih luas.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            {{-- Navigasi --}}
            <div>
                <h3 class="text-lg font-bold mb-6">Navigasi</h3>
                <ul class="space-y-3">
                    <li><a href="{{ url('/') }}" class="text-gray-400 hover:text-white transition">Beranda</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Produk</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Pengrajin</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Tentang Kami</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Blog</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Kontak</a></li>
                </ul>
            </div>

            {{-- Kategori --}}
            <div>
                <h3 class="text-lg font-bold mb-6">Kategori</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Batik</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Gerabah</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Perak</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Anyaman</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Kayu</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Kain Tenun</a></li>
                </ul>
            </div>

            {{-- Kontak --}}
            <div>
                <h3 class="text-lg font-bold mb-6">Kontak Kami</h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt text-white mt-1 mr-3"></i>
                        <span class="text-gray-400">Jl. Paingan, Maguwoharjo, Depok, Sleman, Indonesia</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone-alt text-white mr-3"></i>
                        <span class="text-gray-400">+62 812 3456 7890</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope text-white mr-3"></i>
                        <span class="text-gray-400">info@pasar.id</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pt-8 border-t border-gray-800 text-center text-gray-500 text-sm">
            <p>&copy; {{ date('Y') }} pasar.id . Hak Cipta Dilindungi.</p>
        </div>
    </div>
</footer>