<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <div class="flex items-center">
            <div class="bg-primary w-10 h-10 rounded-full flex items-center justify-center">
                <i class="fas fa-leaf text-white text-xl"></i>
            </div>
            <h1 class="ml-3 text-2xl font-serif font-bold text-primary">Lestari Lokal</h1>
        </div>
        
        <nav class="hidden md:flex space-x-8">
            <a href="{{ url('/') }}" class="text-primary font-medium hover:text-accent transition">Beranda</a>
            <a href="{{ url('/product') }}" class="text-gray-600 hover:text-primary transition">Produk</a>
            <a href="{{ url('/craftman') }}" class="text-gray-600 hover:text-primary transition">Pengrajin</a>
            <a href="#" class="text-gray-600 hover:text-primary transition">Tentang Kami</a>
            <a href="#" class="text-gray-600 hover:text-primary transition">Kontak</a>
        </nav>
        
        <div class="flex items-center space-x-4">
            <button class="text-gray-600 hover:text-primary"><i class="fas fa-search text-xl"></i></button>
            <button class="text-gray-600 hover:text-primary relative">
                <i class="fas fa-shopping-cart text-xl"></i>
                <span class="absolute -top-2 -right-2 bg-secondary text-dark text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
            </button>
            <button class="bg-primary text-white px-4 py-2 rounded-full text-sm font-medium hover:bg-dark transition">Masuk</button>
            <button class="md:hidden text-gray-600"><i class="fas fa-bars text-xl"></i></button>
        </div>
    </div>
</header>
