<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto py-4 flex justify-between items-center max-w-7xl">
        <div class="flex items-center">
            <img src="{{ asset('./logo.png') }}" alt="Logo" class="w-10 h-10">
            <h1 class="ml-3 text-2xl font-serif font-bold text-primary">pasar.id</h1>
        </div>

        <nav class="hidden md:flex space-x-8">
            <a href="{{ url('/') }}" class="font-medium hover:text-primary transition 
        {{ Request::is('/') ? 'text-primary border-b-4 border-primary pb-1' : 'text-gray-600' }}">
                Beranda
            </a>

            <a href="{{ url('/products') }}" class="hover:text-primary transition font-medium
        {{ Request::is('products') ? 'text-primary border-b-4 border-primary pb-1' : 'text-gray-600' }}">
                Produk
            </a>

            <a href="{{ url('/craftman') }}" class="hover:text-primary transition font-medium
        {{ Request::is('craftman') ? 'text-primary border-b-4 border-primary pb-1' : 'text-gray-600' }}">
                Pengrajin
            </a>

            <a href="{{ url('/about') }}" class="hover:text-primary transition font-medium
        {{ Request::is('about') ? 'text-primary border-b-4 border-primary pb-1' : 'text-gray-600' }}">
                Tentang Kami
            </a>

            <a href="{{ url('/contact') }}" class="hover:text-primary transition font-medium
        {{ Request::is('contact') ? 'text-primary border-b-4 border-primary pb-1' : 'text-gray-600' }}">
                Kontak
            </a>
        </nav>

        <div class="flex items-center space-x-4">
            <button class="text-gray-600 hover:text-primary relative">
                <i class="fas fa-shopping-cart text-xl"></i>
                <span
                    class="absolute -top-2 -right-2 bg-secondary text-dark text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
            </button>
            <a href="{{ url('/login') }}"
                class="bg-primary text-white px-4 py-2 rounded-full text-sm font-medium hover:bg-dark transition">Masuk</a>
            <a href="{{ url('/register') }}"
                class="bg-white text-primary px-4 border border-primary py-2 rounded-full text-sm font-medium hover:text-white  hover:bg-dark transition">Daftar</a>
            <button class="md:hidden text-gray-600"><i class="fas fa-bars text-xl"></i></button>
        </div>
    </div>
</header>