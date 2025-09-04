@extends('layouts.app')

@section('title', 'Beranda - Lestari Lokal')

@section('content')
    {{-- Hero --}}
    @include('partials.hero')

    {{-- Categories --}}
    @include('partials.categories')

    {{-- Featured Products --}}
    @include('partials.featured-products')

    {{-- Story --}}
    {{-- @include('partials.story') --}}

    {{-- Craftsmen --}}
    {{-- @include('partials.craftsmen') --}}

    {{-- Testimonials --}}
    {{-- @include('partials.testimonials') --}}

    {{-- CTA --}}
    {{-- @include('partials.cta') --}}
@endsection
