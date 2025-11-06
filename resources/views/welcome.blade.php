<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelMaster - Aplikasi Manajemen Hotel Terbaik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .hover-scale { transition: transform 0.3s ease; }
        .hover-scale:hover { transform: scale(1.05); }
        .fade-in { animation: fadeIn 1s ease-in; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-purple-600">🏨 HotelMaster</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-purple-600 transition">Beranda</a>
                    <a href="#about" class="text-gray-700 hover:text-purple-600 transition">Tentang Kami</a>
                    <a href="#features" class="text-gray-700 hover:text-purple-600 transition">Fitur</a>
                    <a href="#demo" class="text-gray-700 hover:text-purple-600 transition">Demo</a>
                    <a href="#pricing" class="text-gray-700 hover:text-purple-600 transition">Harga</a>
                    <a href="#cta" class="bg-purple-600 text-white px-6 py-2 rounded-full hover:bg-purple-700 transition">Mulai Gratis</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-4 pt-2 pb-3 space-y-1">
                <a href="#home" class="block px-3 py-2 text-gray-700 hover:bg-purple-50 rounded">Beranda</a>
                <a href="#about" class="block px-3 py-2 text-gray-700 hover:bg-purple-50 rounded">Tentang Kami</a>
                <a href="#features" class="block px-3 py-2 text-gray-700 hover:bg-purple-50 rounded">Fitur</a>
                <a href="#demo" class="block px-3 py-2 text-gray-700 hover:bg-purple-50 rounded">Demo</a>
                <a href="#pricing" class="block px-3 py-2 text-gray-700 hover:bg-purple-50 rounded">Harga</a>
                <a href="#cta" class="block px-3 py-2 bg-purple-600 text-white rounded">Mulai Gratis</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="gradient-bg pt-32 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto text-center text-white">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 fade-in">Kelola Hotel Anda dengan Mudah</h1>
            <p class="text-xl sm:text-2xl mb-8 opacity-90 fade-in">Sistem manajemen hotel all-in-one yang mengotomatisasi reservasi, pembayaran, dan operasional harian Anda</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in">
                <a href="#pricing" class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition">Coba Gratis 30 Hari</a>
                <a href="#demo" class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition">Lihat Demo</a>
            </div>
            <div class="mt-16">
                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=1200&h=600&fit=crop" alt="Hotel Dashboard" class="rounded-2xl shadow-2xl mx-auto max-w-full hover-scale">
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section id="about" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">Tentang HotelMaster</h2>
                    <p class="text-lg text-gray-600 mb-4">Kami adalah perusahaan teknologi yang berfokus pada solusi manajemen hotel modern. Sejak 2020, kami telah membantu lebih dari 500+ hotel di Indonesia meningkatkan efisiensi operasional mereka hingga 70%.</p>
                    <p class="text-lg text-gray-600 mb-6">Tim kami terdiri dari para ahli hospitality dan teknologi yang memahami tantangan industri perhotelan. Kami berkomitmen untuk terus berinovasi dan memberikan layanan terbaik.</p>
                    <div class="grid grid-cols-3 gap-6 text-center">
                        <div>
                            <div class="text-3xl font-bold text-purple-600">500+</div>
                            <div class="text-gray-600">Hotel Klien</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-purple-600">99.9%</div>
                            <div class="text-gray-600">Uptime</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-purple-600">24/7</div>
                            <div class="text-gray-600">Support</div>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?w=600&h=800&fit=crop" alt="About Us" class="rounded-2xl shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-6">Cerita Kami</h2>
            <div class="bg-white p-8 rounded-2xl shadow-lg">
                <p class="text-lg text-gray-600 mb-4">HotelMaster lahir dari pengalaman pribadi pendiri kami yang pernah mengelola hotel keluarga. Beliau mengalami kesulitan dengan sistem manual yang memakan waktu dan rentan kesalahan.</p>
                <p class="text-lg text-gray-600 mb-4">Dengan latar belakang teknologi, kami memutuskan untuk menciptakan solusi yang tidak hanya memecahkan masalah kami, tetapi juga membantu ribuan pemilik hotel lainnya.</p>
                <p class="text-lg text-gray-600">Hari ini, HotelMaster telah berkembang menjadi platform pilihan untuk hotel boutique hingga chain hotel besar di seluruh Indonesia.</p>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section id="features" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Fitur Unggulan</h2>
                <p class="text-xl text-gray-600">Semua yang Anda butuhkan untuk mengelola hotel modern</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-purple-50 p-8 rounded-2xl hover-scale">
                    <div class="text-4xl mb-4">📅</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Manajemen Reservasi</h3>
                    <p class="text-gray-600">Kelola booking online dan offline dalam satu dashboard. Real-time availability dan automatic confirmation.</p>
                </div>
                <div class="bg-blue-50 p-8 rounded-2xl hover-scale">
                    <div class="text-4xl mb-4">💳</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Payment Gateway</h3>
                    <p class="text-gray-600">Terima pembayaran dari berbagai metode: kartu kredit, transfer bank, e-wallet, dan QRIS.</p>
                </div>
                <div class="bg-green-50 p-8 rounded-2xl hover-scale">
                    <div class="text-4xl mb-4">🏠</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Room Management</h3>
                    <p class="text-gray-600">Monitor status kamar real-time, housekeeping schedule, dan maintenance tracking.</p>
                </div>
                <div class="bg-yellow-50 p-8 rounded-2xl hover-scale">
                    <div class="text-4xl mb-4">📊</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Analytics & Reports</h3>
                    <p class="text-gray-600">Dashboard analytics lengkap dengan revenue reports, occupancy rates, dan business insights.</p>
                </div>
                <div class="bg-pink-50 p-8 rounded-2xl hover-scale">
                    <div class="text-4xl mb-4">👥</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Guest Management</h3>
                    <p class="text-gray-600">Database tamu lengkap, riwayat menginap, preferensi, dan program loyalitas terintegrasi.</p>
                </div>
                <div class="bg-indigo-50 p-8 rounded-2xl hover-scale">
                    <div class="text-4xl mb-4">📱</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Mobile App</h3>
                    <p class="text-gray-600">Akses sistem dari mana saja dengan aplikasi mobile iOS dan Android.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Demo Section -->
    <section id="demo" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Lihat Demo Penggunaan</h2>
                <p class="text-xl text-gray-600">Rasakan kemudahan mengelola hotel dengan HotelMaster</p>
            </div>
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Dashboard Utama</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <span class="text-purple-600 mr-2">✓</span>
                                <span>Lihat occupancy rate real-time dan revenue hari ini</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-purple-600 mr-2">✓</span>
                                <span>Monitor check-in/check-out harian</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-purple-600 mr-2">✓</span>
                                <span>Track housekeeping status per kamar</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-purple-600 mr-2">✓</span>
                                <span>Notifikasi booking baru otomatis</span>
                            </li>
                        </ul>
                        <div class="mt-6">
                            <button class="bg-purple-600 text-white px-6 py-3 rounded-full hover:bg-purple-700 transition">Coba Demo Interaktif</button>
                        </div>
                    </div>
                    <div>
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=600&h=400&fit=crop" alt="Dashboard Demo" class="rounded-xl shadow-lg">
                    </div>
                </div>
                <div class="mt-12 grid md:grid-cols-3 gap-6">
                    <div class="text-center p-6 bg-gray-50 rounded-xl">
                        <div class="text-3xl mb-2">⚡</div>
                        <h4 class="font-bold text-gray-800 mb-2">Setup 5 Menit</h4>
                        <p class="text-gray-600 text-sm">Mulai dalam hitungan menit, tanpa training khusus</p>
                    </div>
                    <div class="text-center p-6 bg-gray-50 rounded-xl">
                        <div class="text-3xl mb-2">🔒</div>
                        <h4 class="font-bold text-gray-800 mb-2">Aman & Terenkripsi</h4>
                        <p class="text-gray-600 text-sm">Data tamu terlindungi dengan enkripsi bank-level</p>
                    </div>
                    <div class="text-center p-6 bg-gray-50 rounded-xl">
                        <div class="text-3xl mb-2">☁️</div>
                        <h4 class="font-bold text-gray-800 mb-2">Cloud-Based</h4>
                        <p class="text-gray-600 text-sm">Akses dari mana saja, backup otomatis</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section id="pricing" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Paket Harga</h2>
                <p class="text-xl text-gray-600">Pilih paket yang sesuai dengan kebutuhan hotel Anda</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Starter -->
                <div class="bg-white border-2 border-gray-200 rounded-2xl p-8 hover:border-purple-400 transition hover-scale">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Starter</h3>
                    <p class="text-gray-600 mb-6">Untuk hotel kecil & guest house</p>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-800">Rp 499.000</span>
                        <span class="text-gray-600">/bulan</span>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span class="text-gray-600">Hingga 20 kamar</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span class="text-gray-600">Manajemen reservasi dasar</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span class="text-gray-600">1 user akses</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span class="text-gray-600">Email support</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span class="text-gray-600">Report bulanan</span>
                        </li>
                    </ul>
                    <a href="#cta" class="block text-center bg-gray-100 text-gray-800 px-6 py-3 rounded-full font-semibold hover:bg-gray-200 transition">Pilih Paket</a>
                </div>

                <!-- Professional (Popular) -->
                <div class="bg-purple-600 text-white rounded-2xl p-8 relative hover-scale transform scale-105">
                    <div class="absolute top-0 right-0 bg-yellow-400 text-purple-900 px-4 py-1 rounded-bl-xl rounded-tr-xl font-bold text-sm">POPULER</div>
                    <h3 class="text-2xl font-bold mb-2">Professional</h3>
                    <p class="opacity-90 mb-6">Untuk hotel menengah</p>
                    <div class="mb-6">
                        <span class="text-4xl font-bold">Rp 1.499.000</span>
                        <span class="opacity-90">/bulan</span>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <span class="text-yellow-400 mr-2">✓</span>
                            <span>Hingga 100 kamar</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-400 mr-2">✓</span>
                            <span>Semua fitur Starter</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-400 mr-2">✓</span>
                            <span>5 user akses</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-400 mr-2">✓</span>
                            <span>Payment gateway terintegrasi</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-400 mr-2">✓</span>
                            <span>Analytics & custom reports</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-400 mr-2">✓</span>
                            <span>Mobile app access</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-400 mr-2">✓</span>
                            <span>24/7 support</span>
                        </li>
                    </ul>
                    <a href="#cta" class="block text-center bg-white text-purple-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">Pilih Paket</a>
                </div>

                <!-- Enterprise -->
                <div class="bg-white border-2 border-gray-200 rounded-2xl p-8 hover:border-purple-400 transition hover-scale">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Enterprise</h3>
                    <p class="text-gray-600 mb-6">Untuk chain hotel & resort</p>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-800">Custom</span>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span class="text-gray-600">Unlimited kamar</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span class="text-gray-600">Semua fitur Professional</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span class="text-gray-600">Unlimited users</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span class="text-gray-600">Multi-property management</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span class="text-gray-600">Custom integrations</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span class="text-gray-600">Dedicated account manager</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span class="text-gray-600">Priority support</span>
                        </li>
                    </ul>
                    <a href="#cta" class="block text-center bg-gray-100 text-gray-800 px-6 py-3 rounded-full font-semibold hover:bg-gray-200 transition">Hubungi Sales</a>
                </div>
            </div>
            <p class="text-center text-gray-600 mt-8">✨ Semua paket termasuk free trial 30 hari tanpa kartu kredit</p>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="cta" class="gradient-bg py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h2 class="text-4xl font-bold mb-6">Siap Meningkatkan Efisiensi Hotel Anda?</h2>
            <p class="text-xl mb-8 opacity-90">Bergabunglah dengan 500+ hotel yang telah mempercayai HotelMaster</p>
            <form class="max-w-md mx-auto mb-8">
                <div class="flex flex-col sm:flex-row gap-4">
                    <input type="email" placeholder="Email Anda" class="flex-1 px-6 py-4 rounded-full text-gray-800 focus:outline-none focus:ring-2 focus:ring-purple-300">
                    <button type="submit" class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition">Mulai Gratis</button>
                </div>
            </form>
            <div class="flex flex-wrap justify-center gap-8 text-sm opacity-90">
                <div class="flex items-center">
                    <span class="mr-2">✓</span>
                    <span>Gratis 30 hari</span>
                </div>
                <div class="flex items-center">
                    <span class="mr-2">✓</span>
                    <span>Tanpa kartu kredit</span>
                </div>
                <div class="flex items-center">
                    <span class="mr-2">✓</span>
                    <span>Setup 5 menit</span>
                </div>
                <div class="flex items-center">
                    <span class="mr-2">✓</span>
                    <span>Cancel kapan saja</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">🏨 HotelMaster</h3>
                    <p class="text-gray-400">Solusi manajemen hotel modern untuk meningkatkan efisiensi operasional Anda.</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Produk</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#features" class="hover:text-white transition">Fitur</a></li>
                        <li><a href="#pricing" class="hover:text-white transition">Harga</a></li>
                        <li><a href="#demo" class="hover:text-white transition">Demo</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Perusahaan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#about" class="hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-white transition">Karir</a></li>
                        <li><a href="#" class="hover:text-white transition">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>Email: info@hotelmaster.id</li>
                        <li>Phone: +62 21 1234 5678</li>
                        <li>WhatsApp: +62 812 3456 7890</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                <p>&copy; 2024 HotelMaster. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    mobileMenu.classList.add('hidden');
                }
            });
        });
    </script>
</body>
</html>
