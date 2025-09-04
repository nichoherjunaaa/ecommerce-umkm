<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lestari Lokal')</title>
    
    <!-- Tailwind & Fonts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1a5d1a',
                        secondary: '#facc15',
                        accent: '#8b5cf6',
                        light: '#f0fdf4',
                        dark: '#052e16'
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                        serif: ['Playfair Display', 'serif']
                    }
                }
            }
        }
    </script>

    <!-- Custom Styles -->
    <style>
        .hero-pattern {
            background-image: url('data:image/svg+xml;base64,...');
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1),
                        0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .craftsman-card:hover { transform: scale(1.02); }
        .testimonial-card { transition: all 0.3s ease; }
        .testimonial-card:hover { transform: translateY(-10px); }
    </style>

    @stack('styles')
</head>
<body class="font-sans bg-light">
    
    {{-- Header --}}
    @include('partials.header')

    {{-- Main Content --}}
    <main class="px-6 flex flex-col mx-auto">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    @stack('scripts')
</body>
</html>
