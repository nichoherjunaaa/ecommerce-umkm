@extends('layouts.app')

@section('title', 'Produk - Pasar.id')

@section('content')
    <main class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row">
            <!-- Sidebar Filters -->
            <div class="lg:w-1/4 pr-0 lg:pr-8 mb-8 lg:mb-0">
                @include('partials.product-filter')
            </div>

            <!-- Craftsman Grid -->
            <div class="lg:w-3/4">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
                    <div>
                        <h1 class="text-3xl font-serif font-bold text-dark">Produk Lokal Yogyakarta</h1>
                        <p class="text-gray-600 mt-2">Menampilkan 64 produk dari pengrajin Yogyakarta</p>
                    </div>
                    <div class="mt-4 md:mt-0">
                        <div class="flex items-center">
                            <span class="text-gray-600 mr-2">Urutkan:</span>
                            <select
                                class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                <option>Terbaru</option>
                                <option>Terpopuler</option>
                                <option>Nama A-Z</option>
                                <option>Lokasi</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-4 w-full md:w-full relative">
                    <label for="search" class="sr-only">Cari Produk</label>
                    <input type="text" id="search" name="search" placeholder="Cari Produk"
                        class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                    <!-- Icon kaca pembesar -->
                    <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                        <i class="fas fa-search"></i>
                    </span>
                </div>

                @include('partials.product-grid')
                <!-- Pagination -->
                @include('partials.pagination')
            </div>
        </div>
    </main>
@endsection