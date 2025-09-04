@extends('layouts.app')

@section('title', 'Tentang Kami - Pasar.id')

@section('content')
    <section class="py-16 bg-gradient-to-r from-primary to-dark mt-3">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-serif font-bold text-white mb-6">Tentang Lestari Lokal</h1>
            <p class="text-xl text-light max-w-3xl mx-auto mb-10">
                Menghubungkan pengrajin lokal Yogyakarta dengan pasar digital untuk melestarikan budaya dan meningkatkan
                kesejahteraan komunitas.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                <button
                    class="bg-secondary hover:bg-yellow-400 text-dark font-bold py-3 px-8 rounded-full transition duration-300">
                    Jelajahi Produk
                </button>
                <button
                    class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white font-bold py-3 px-8 rounded-full transition duration-300">
                    Temui Pengrajin
                </button>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <div class="bg-gray-200 border-2 border-dashed rounded-xl w-full h-96"></div>
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h2 class="text-3xl font-serif font-bold text-dark mb-6">Kisah Kami</h2>
                    <p class="text-gray-600 mb-6">
                        Lestari Lokal lahir dari kepedulian terhadap kondisi pengrajin lokal di Yogyakarta yang memiliki
                        keterampilan luar biasa namun terbatas dalam mengakses pasar yang lebih luas.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Pendiri kami, Banyu Wibowo, melihat potensi besar dalam kerajinan tradisional Indonesia yang
                        kaya akan makna dan nilai budaya. Namun, banyak pengrajin terampil terjebak dalam sistem
                        pemasaran yang tidak efisien dan tidak mampu menceritakan nilai sebenarnya dari karya mereka.
                    </p>
                    <p class="text-gray-600">
                        Dengan semangat melestarikan warisan budaya dan memberdayakan komunitas lokal, Lestari Lokal
                        dibentuk sebagai jembatan antara pengrajin dan konsumen yang menghargai keaslian serta cerita di
                        balik setiap karya.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-light">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-serif font-bold text-dark mb-4">Misi & Visi Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Komitmen kami dalam melestarikan budaya dan memberdayakan
                    pengrajin lokal</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Mission -->
                <div class="mission-card bg-white rounded-xl p-8 shadow-md">
                    <div class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-bullseye text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-dark mb-4">Misi Kami</h3>
                    <ul class="space-y-4">
                        <li class="flex">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span>Memberdayakan pengrajin lokal dengan akses pasar digital yang luas</span>
                        </li>
                        <li class="flex">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span>Melestarikan warisan budaya melalui platform digital</span>
                        </li>
                        <li class="flex">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span>Meningkatkan kesejahteraan komunitas pengrajin</span>
                        </li>
                        <li class="flex">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span>Menceritakan nilai dan filosofi di balik setiap karya</span>
                        </li>
                    </ul>
                </div>

                <!-- Vision -->
                <div class="mission-card bg-white rounded-xl p-8 shadow-md">
                    <div class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-eye text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-dark mb-4">Visi Kami</h3>
                    <p class="text-gray-600 mb-6">
                        Menjadi platform e-commerce terdepan yang tidak hanya menjual produk kerajinan, tetapi juga
                        menjadi wadah untuk melestarikan dan mempromosikan budaya lokal Indonesia.
                    </p>
                    <p class="text-gray-600">
                        Kami berkomitmen untuk menciptakan ekosistem yang saling menguntungkan antara pengrajin,
                        konsumen, dan komunitas dengan menjaga keaslian dan nilai-nilai budaya dalam setiap transaksi.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-serif font-bold text-dark mb-4">Nilai-Nilai Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Prinsip yang menjadi landasan dalam menjalankan misi kami</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Value 1 -->
                <div class="value-card bg-light rounded-xl p-6 text-center">
                    <div class="value-icon w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-leaf text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-3">Kelestarian Budaya</h3>
                    <p class="text-gray-600 text-sm">Melestarikan warisan budaya melalui pelestarian kerajinan
                        tradisional</p>
                </div>

                <!-- Value 2 -->
                <div class="value-card bg-light rounded-xl p-6 text-center">
                    <div class="value-icon w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-hands-helping text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-3">Pemberdayaan</h3>
                    <p class="text-gray-600 text-sm">Memberdayakan pengrajin lokal dengan akses pasar yang lebih luas
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="value-card bg-light rounded-xl p-6 text-center">
                    <div class="value-icon w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-gem text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-3">Keaslian</h3>
                    <p class="text-gray-600 text-sm">Menjamin keaslian dan kualitas setiap produk yang dijual</p>
                </div>

                <!-- Value 4 -->
                <div class="value-card bg-light rounded-xl p-6 text-center">
                    <div class="value-icon w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heart text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-3">Kemanusiaan</h3>
                    <p class="text-gray-600 text-sm">Mengutamakan kesejahteraan dan kemanusiaan dalam setiap interaksi
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-gradient-to-r from-primary to-dark mb-3">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Stat 1 -->
                <div class="stats-card bg-white bg-opacity-10 rounded-xl p-6 text-center text-white">
                    <div class="text-4xl font-bold mb-2">150+</div>
                    <div class="text-lg">Pengrajin Terdaftar</div>
                </div>

                <!-- Stat 2 -->
                <div class="stats-card bg-white bg-opacity-10 rounded-xl p-6 text-center text-white">
                    <div class="text-4xl font-bold mb-2">500+</div>
                    <div class="text-lg">Produk Tersedia</div>
                </div>

                <!-- Stat 3 -->
                <div class="stats-card bg-white bg-opacity-10 rounded-xl p-6 text-center text-white">
                    <div class="text-4xl font-bold mb-2">10.000+</div>
                    <div class="text-lg">Pelanggan Puas</div>
                </div>

                <!-- Stat 4 -->
                <div class="stats-card bg-white bg-opacity-10 rounded-xl p-6 text-center text-white">
                    <div class="text-4xl font-bold mb-2">25+</div>
                    <div class="text-lg">Desa Wisata Mitra</div>
                </div>
            </div>
        </div>
    </section>

@endsection