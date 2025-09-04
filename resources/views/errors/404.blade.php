<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan</title>
    <link rel="icon" type="image/png" href="{{ asset('./logo.png') }}">
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
</head>
<body class="bg-light font-sans">

<div class="flex-1 flex items-center justify-center px-4 py-16">
    <div class="max-w-4xl mx-auto text-center">
        <div class="relative mb-8">
            <div class="text-8xl md:text-9xl font-bold text-primary select-none">
                404
            </div>
        </div>

        <div class="mb-8">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                Oops! Halaman Tidak Ditemukan
            </h1>
            <p class="text-xl text-gray-600 mb-2">
                Sepertinya halaman yang Anda cari sedang berbelanja di tempat lain
            </p>
            <p class="text-lg text-gray-500">
                Jangan khawatir, mari kita bantu Anda menemukan produk UMKM terbaik!
            </p>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
            <a href="{{ url('/') }}" class="bg-primary text-white px-8 py-3 rounded-lg font-semibold hover:bg-primary/90 transition-colors inline-flex items-center justify-center">
                <i class="fas fa-home mr-2"></i>
                Kembali ke Beranda
            </a>
            <a href="{{ url('/products') }}" class="border-2 border-primary text-primary px-8 py-3 rounded-lg font-semibold hover:bg-primary hover:text-white transition-colors inline-flex items-center justify-center">
                <i class="fas fa-shopping-bag mr-2"></i>
                Lihat Semua Produk
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Butuh Bantuan?</h2>
            <p class="text-gray-600 mb-6">Tim customer service kami siap membantu Anda 24/7</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="#" class="flex items-center justify-center p-4 border border-gray-200 rounded-lg hover:border-primary hover:bg-primary/5 transition-colors group">
                    <div class="text-center">
                        <i class="fas fa-phone text-2xl text-primary mb-2 group-hover:scale-110 transition-transform"></i>
                        <p class="font-medium text-gray-800">Telepon</p>
                        <p class="text-sm text-gray-600">+62 812-3456-7890</p>
                    </div>
                </a>

                <a href="#" class="flex items-center justify-center p-4 border border-gray-200 rounded-lg hover:border-primary hover:bg-primary/5 transition-colors group">
                    <div class="text-center">
                        <i class="fas fa-envelope text-2xl text-primary mb-2 group-hover:scale-110 transition-transform"></i>
                        <p class="font-medium text-gray-800">Email</p>
                        <p class="text-sm text-gray-600">help@umkmstore.com</p>
                    </div>
                </a>

                <a href="#" class="flex items-center justify-center p-4 border border-gray-200 rounded-lg hover:border-primary hover:bg-primary/5 transition-colors group">
                    <div class="text-center">
                        <i class="fab fa-whatsapp text-2xl text-primary mb-2 group-hover:scale-110 transition-transform"></i>
                        <p class="font-medium text-gray-800">WhatsApp</p>
                        <p class="text-sm text-gray-600">Chat Langsung</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
