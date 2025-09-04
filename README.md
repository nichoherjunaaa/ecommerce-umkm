# E-commerce UMKM

**E-commerce UMKM** adalah platform e-commerce untuk memberdayakan pengrajin UMKM di Yogyakarta. Website ini memungkinkan pengrajin menampilkan produk mereka secara online, dan memudahkan konsumen untuk membeli produk kerajinan lokal dengan nyaman.

---

## Fitur Utama

- **Halaman Produk**
  - Menampilkan berbagai produk kerajinan lokal.
  - Filter berdasarkan kategori, harga, dan lokasi pengrajin.
  - Rata-rata rating produk dan review pengguna.

- **Keranjang Belanja**
  - Bisa menambahkan banyak produk.
  - Update jumlah item, hapus item, dan total pembayaran otomatis.

- **Autentikasi**
  - Login dan registrasi pengguna.
  - Role-based access untuk admin dan user biasa.

- **Pengelolaan Pengrajin**
  - Halaman khusus untuk menampilkan profil pengrajin.
  - Admin bisa menambah atau mengelola data pengrajin.

- **Transaksi**
  - Checkout produk dengan perhitungan total harga.
  - Notifikasi pembayaran.

- **Review Produk**
  - Pengguna bisa memberikan rating (bintang) dan komentar.

- **Responsive Design**
  - Layout yang menyesuaikan perangkat desktop, tablet, dan mobile.

---

## Teknologi yang Digunakan

- **Backend:** Laravel 12  
- **Frontend:** Tailwind CSS, Vite, Blade Templates  
- **Database:** MySQL  
- **Deployment:** GitHub / Heroku / Vercel (opsional)  
- **Lainnya:** FontAwesome, Google Fonts

---

## Struktur Project

- `app/` - Kode aplikasi Laravel (Models, Controllers, Middleware)  
- `routes/` - File routing Laravel  
- `resources/` - Blade template, CSS/JS, assets  
- `public/` - File publik dan hasil build frontend  
- `database/` - Migration, seeders, factory  
- `storage/` - Logs, cache, session (tidak di-push ke repo)  
- `.env.example` - Contoh konfigurasi environment  

---