# MotoFix
## Anggota Tim 1:
- Muhammad Fachri Alfarizi
- Darriel Khalil Maulana Haris
- Muhammad Nur Fauzi

## About Project
MotoFix adalah sistem manajemen bengkel digital berbasis web (Private ERP) yang mengintegrasikan manajemen stok cerdas, kasir (POS), dan laporan keuangan real-time untuk mencegah kebocoran stok dan mempercepat transaksi.
MotoFix adalah aplikasi berbasis web yang dibangun menggunakan Framework Laravel. Sistem ini dirancang sebagai private system (Intranet/Cloud) yang membagi akses pengguna menjadi tiga peran krusial: Admin, Gudang, dan Kasir, guna memastikan keamanan data dan pembagian tugas yang jelas dalam ekosistem bengkel.

## The Problem
Ketidakefisienan operasional pada bengkel motor konvensional (UMKM) akibat pencatatan manual. Masalah spesifik meliputi: kebocoran stok barang (sparepart hilang/tidak tercatat), kesulitan melacak riwayat servis pelanggan, dan tidak adanya transparansi laporan keuangan harian yang memicu kerugian finansial bagi pemilik bengkel.

## Teknologi Yang Digunakan:
- Laravel 11
- TailwindCss v.3.4.13
- Flowbite v.2.5.2
- Flowbite Datepicker v.1.3.2
- PHP v.8.2.4
- MySQL
- Javascript
- Chart.js
#### Tools :
- Visual Studio Code
- Laragon

## Panduan Instalasi
- Langkah 1 : Download Project pada https://github.com/DarrielK/MotoFix
- Langkah 2 : Buka dan extract project
- Langkah 3 : Buka project menggunakan code editor (Visual Studio Code)
- Langkah 4 : Buka dan nyalakan web server (Laragon)
- Langkah 5 : Buka terminal dengan direktori project
- Langkah 6 : Ketikan "php artisan migrate" untuk men-setup database
- Langkah 7 : Ketikan "php artisan db:seed --class=UserSeeder" untuk memasukan data user untuk database
- Langkah 8 : Data User yang disediakan :
- Name = admin | Password = admin123 (Role : Admin)
- Name = gudang | Password = gudang123 (Role : Gudang)
- Name = kasir | password = kasir123 (Role : Kasir)

## Cara Run Project
- Langkah 1 : Pastikan webserver nyala dan sudah menjalankan tahap-tahap panduan instalasi
- Langkah 2 : Buka 2 terminal dengan direktori project
- Langkah 3 : Terminal 1 ketikan "php artisan serve"
- Langkah 4 : Terminal 2 ketikan "npm run dev"
- Langkah 5 : Klik link hasil terminal 1, biasanya http://127.0.0.1:8000/
- Langkah 6 : Isi form login dengan user yang diberikan pada panduan instalasi
