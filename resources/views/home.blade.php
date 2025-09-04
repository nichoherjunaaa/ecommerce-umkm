@extends('layouts.app')

@section('title', 'Beranda - Pasar.id')

@section('content')
    {{-- Hero --}}
        @include('partials.hero')

    {{-- Categories --}}
        @include('partials.categories')

    {{-- Featured Products --}}
        @include('partials.featured-products')

@endsection