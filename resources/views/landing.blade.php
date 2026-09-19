<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CV. Srikandi Keris Barokah - Solusi Terpadu untuk Produk Kesehatan, Alat Terapi, Skincare, Buku, Perjalanan Haji & Umroh, serta Investasi Properti di Malang.">
    <title>CV. Srikandi Keris Barokah | Solusi Terpadu Kesehatan, Ibadah & Investasi</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS via Laravel Asset Helper -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Header / Navbar -->
    <header class="navbar-container">
        <div class="container navbar-wrapper">
            <a href="#home" class="nav-logo">
                <div class="logo-svg-wrapper">
                    <!-- Elegant Custom SVG Logo based on the letterhead -->
                    <svg viewBox="0 0 100 100" class="company-logo-svg">
                        <circle cx="50" cy="50" r="46" fill="#07180f" stroke="#cfa852" stroke-width="2.5"/>
                        <circle cx="50" cy="50" r="42" fill="none" stroke="#cfa852" stroke-width="0.7" stroke-dasharray="3 3"/>
                        <!-- Stylized Keris -->
                        <path d="M50 82 L50 48 M48 48 L52 48 L53 45 L47 45 Z" stroke="#cfa852" stroke-width="2.5" stroke-linecap="round" fill="#cfa852"/>
                        <path d="M50 45 C47 40, 53 35, 50 30 C47 25, 53 20, 50 14 C48 20, 44 25, 48 30 C51 35, 45 40, 48 45 Z" fill="url(#goldGradient)" stroke="#cfa852" stroke-width="0.5"/>
                        <!-- Leaves (Herbal symbol) -->
                        <path d="M28 50 C28 42, 38 45, 42 48 C36 49, 32 58, 28 50 Z" fill="#2d6a4f" opacity="0.85"/>
                        <path d="M72 50 C72 42, 62 45, 58 48 C64 49, 68 58, 72 50 Z" fill="#2d6a4f" opacity="0.85"/>
                        <!-- Health Cross -->
                        <path d="M47 52 H53 V58 H47 Z" fill="#cfa852"/>
                        <path d="M44 55 H56 V55.5 H44 Z" stroke="#cfa852" stroke-width="1.5"/>
                        <!-- Shading Gradient -->
                        <defs>
                            <linearGradient id="goldGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#f3e098" />
                                <stop offset="50%" stop-color="#cfa852" />
                                <stop offset="100%" stop-color="#a67c1e" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="logo-text">
                    <span class="brand-name">SRIKANDI KERIS BAROKAH</span>
                    <span class="brand-tagline">Kesehatan, Ibadah & Investasi</span>
                </div>
            </a>
            
            <nav class="nav-menu" id="navMenu">
                <a href="#home" class="nav-link active">Beranda</a>
                <a href="#tentang" class="nav-link">Tentang Kami</a>
                <a href="#produk" class="nav-link">Layanan & Produk</a>
                <a href="#layanan" class="nav-link">Pilar Solusi</a>
                <a href="#testimoni" class="nav-link">Testimoni</a>
                <a href="#kontak" class="nav-link btn-nav-contact">Kontak</a>
            </nav>
            
            <div class="nav-actions">
                <a href="https://wa.me/6285954572652" target="_blank" class="btn btn-gold btn-header-wa">
                    <i class="fab fa-whatsapp"></i> Chat WhatsApp
                </a>
                <button class="mobile-toggle" id="mobileToggle" aria-label="Buka Menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-bg-overlay"></div>
        <div class="container hero-container">
            <div class="hero-content">
                <div class="badge-gold">
                    <i class="fas fa-gem"></i> Solusi Terpadu & Tepercaya
                </div>
                <h1 class="hero-title">Integritas Pelayanan untuk <span class="text-gold-gradient">Hidup Sehat, Berkah & Sukses</span></h1>
                <p class="hero-subtitle">Kami menyediakan berbagai kebutuhan hidup Anda dalam satu wadah terpercaya. Mulai dari kesehatan alami, literasi buku bermanfaat, bimbingan perjalanan suci haji & umroh, kecantikan skincare herbal, hingga investasi properti masa depan Anda.</p>
                <div class="hero-buttons">
                    <a href="#produk" class="btn btn-gold btn-lg">Lihat Semua Produk <i class="fas fa-arrow-right"></i></a>
                    <a href="#tentang" class="btn btn-outline-white btn-lg">Tentang Kami</a>
                </div>
            </div>
            
            <div class="hero-visual">
                <div class="hero-card-floating">
                    <div class="circle-glow"></div>
                    <div class="hero-logo-large">
                        <svg viewBox="0 0 100 100" class="hero-svg-logo">
                            <circle cx="50" cy="50" r="46" fill="#0b2416" stroke="#cfa852" stroke-width="2"/>
                            <path d="M50 80 L50 48 M48 48 L52 48 L53 45 L47 45 Z" stroke="#cfa852" stroke-width="2" fill="#cfa852"/>
                            <path d="M50 45 C47 40, 53 35, 50 30 C47 25, 53 20, 50 14 C48 20, 44 25, 48 30 C51 35, 45 40, 48 45 Z" fill="url(#goldGradient)" stroke="#cfa852" stroke-width="0.5"/>
                            <path d="M28 50 C28 42, 38 45, 42 48 C36 49, 32 58, 28 50 Z" fill="#4ade80" opacity="0.9"/>
                            <path d="M72 50 C72 42, 62 45, 58 48 C64 49, 68 58, 72 50 Z" fill="#4ade80" opacity="0.9"/>
                            <path d="M47 52 H53 V58 H47 Z" fill="#cfa852"/>
                        </svg>
                    </div>
                    <h3 class="hero-card-title">SKB</h3>
                    <p class="hero-card-text">Srikandi Keris Barokah</p>
                    <div class="divider-gold-small"></div>
                    <p class="hero-card-slogan">"Sehat Alami, Hidup Berkah"</p>
                </div>
            </div>
        </div>
        <div class="wave-transition-bottom">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C26.9,8.75,55.05,16.22,83.1,22.81,151.77,38.83,222.05,62.86,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- Info Bar / Quick Stats -->
    <section class="quick-info-section">
        <div class="container quick-info-grid">
            <div class="info-card">
                <div class="info-icon"><i class="fas fa-shield-halved"></i></div>
                <div class="info-text">
                    <h4>Integritas & Amanah</h4>
                    <p>Menjamin keaslian & kualitas produk</p>
                </div>
            </div>
            <div class="info-card">
                <div class="info-icon"><i class="fas fa-heart-circle-check"></i></div>
                <div class="info-text">
                    <h4>Solusi Komprehensif</h4>
                    <p>Kesehatan, Finansial & Spiritual</p>
                </div>
            </div>
            <div class="info-card">
                <div class="info-icon"><i class="fas fa-people-roof"></i></div>
                <div class="info-text">
                    <h4>Pilihan Masa Depan</h4>
                    <p>Properti aman & Ibadah mabrur</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section id="tentang" class="about-section">
        <div class="container">
            <div class="section-header text-center">
                <span class="sub-title">Profil Kami</span>
                <h2 class="section-title">Profil CV. Srikandi Keris Barokah</h2>
                <div class="gold-line-decor">
                    <span class="decor-diamond"></span>
                </div>
            </div>
            
            <div class="about-grid">
                <div class="about-image-wrapper">
                    <!-- Styled abstract presentation of natural values -->
                    <div class="abstract-box">
                        <div class="abstract-inner">
                            <span class="watermark-logo">SKB</span>
                            <div class="feature-item-small">
                                <i class="fas fa-check-circle"></i> Legalitas Lengkap
                            </div>
                            <div class="feature-item-small second">
                                <i class="fas fa-heart"></i> Berkah & Amanah
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="about-content">
                    <h3>Mitra Sejati Kebutuhan Hidup Anda</h3>
                    <p class="lead-text">CV. Srikandi Keris Barokah adalah perusahaan multi-sektor terintegrasi yang berkantor pusat di Malang, Jawa Timur.</p>
                    <p>Berawal dari kepedulian terhadap kesehatan alami masyarakat melalui obat herbal dan alat terapi tradisional, kami kini berkembang pesat untuk menyediakan solusi yang lebih komprehensif bagi pelanggan setia kami. Kami bangga dapat melayani penyediaan literatur buku bermanfaat, produk kecantikan kulit (skincare) aman, penyelenggaraan perjalanan ibadah haji & umroh yang amanah, hingga pemasaran investasi properti pilihan yang bernilai tinggi.</p>
                    
                    <div class="pillars-wrapper">
                        <div class="pillar-card">
                            <div class="pillar-icon"><i class="fas fa-handshake"></i></div>
                            <h5>Kepercayaan Utama</h5>
                            <p>Kepercayaan pelanggan adalah fondasi kami dalam menyediakan produk & jasa berlisensi resmi.</p>
                        </div>
                        <div class="pillar-card">
                            <div class="pillar-icon"><i class="fas fa-certificate"></i></div>
                            <h5>Kualitas Bergaransi</h5>
                            <p>Mulai dari skincare berBPOM hingga perumahan dengan legalitas sertifikat tanah yang aman.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi & Misi Callout -->
    <section class="vision-mission-section">
        <div class="container vision-mission-wrapper">
            <div class="vision-box">
                <i class="fas fa-eye vision-icon"></i>
                <h3>Visi Kami</h3>
                <p>"Menjadi konglomerasi bisnis syariah pilihan utama masyarakat Indonesia yang menyajikan produk kesehatan, kecantikan, edukasi, spiritualitas ibadah, dan hunian properti yang mengutamakan keberkahan hidup."</p>
            </div>
            <div class="divider-vertical"></div>
            <div class="mission-box">
                <i class="fas fa-bullseye vision-icon"></i>
                <h3>Misi Kami</h3>
                <ul>
                    <li>Menyediakan produk kesehatan herbal, kosmetik/skincare, dan alat terapi berkualitas tinggi serta aman dikonsumsi.</li>
                    <li>Membantu umat melaksanakan ibadah haji & umroh dengan pelayanan yang tulus, amanah, dan terjangkau.</li>
                    <li>Memasarkan unit properti strategis dengan legalitas aman untuk menunjang masa depan finansial keluarga.</li>
                    <li>Menerbitkan & mendistribusikan buku-buku edukasi bermutu tinggi untuk mencerahkan umat.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Produk Section -->
    <section id="produk" class="products-section">
        <div class="container">
            <div class="section-header text-center">
                <span class="sub-title">Layanan & Produk kami</span>
                <h2 class="section-title">Katalog Produk Multi-Sektor</h2>
                <div class="gold-line-decor">
                    <span class="decor-diamond"></span>
                </div>
                <p class="section-desc">Pilihan produk berkualitas tinggi dari berbagai pilar bisnis kami untuk melengkapi kebahagiaan, kesehatan, spiritual, dan kesejahteraan hidup Anda.</p>
            </div>
            
            <!-- Expanded Category Filter Tabs -->
            <div class="filter-tabs">
                <button class="filter-btn active" data-category="all">Semua</button>
                <button class="filter-btn" data-category="kesehatan">Kesehatan & Herbal</button>
                <button class="filter-btn" data-category="terapi">Alat Terapi</button>
                <button class="filter-btn" data-category="skincare">Skincare</button>
                <button class="filter-btn" data-category="buku">Buku</button>
                <button class="filter-btn" data-category="travel">Haji & Umroh</button>
                <button class="filter-btn" data-category="properti">Properti</button>
                <button class="filter-btn" data-category="wo">Wedding Organizer</button>
            </div>
            
            <div class="products-grid" id="productsGrid">
                @foreach ($products as $prod)
                    <div class="product-card" data-category="{{ $prod->category }}">
                        <div class="product-img-holder">
                            @if ($prod->image)
                                <img src="{{ asset($prod->image) }}" alt="{{ $prod->name }}" class="product-img @if(!str_contains($prod->image, 'alfachanna.jpg')) product-img-contain @endif">
                            @elseif ($prod->icon)
                                <div class="product-icon-wrap"><i class="{{ $prod->icon }}"></i></div>
                            @else
                                <div class="product-icon-wrap"><i class="fas fa-box"></i></div>
                            @endif
                            
                            @if ($prod->badge)
                                <span class="product-badge">{{ $prod->badge }}</span>
                            @endif
                        </div>
                        <div class="product-info">
                            <div class="product-rating">
                                @php
                                    $wholeStars = floor($prod->rating);
                                    $hasHalf = ($prod->rating - $wholeStars) >= 0.5;
                                    $emptyStars = 5 - $wholeStars - ($hasHalf ? 1 : 0);
                                @endphp
                                @for ($i = 0; $i < $wholeStars; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                                @if ($hasHalf)
                                    <i class="fas fa-star-half-alt"></i>
                                @endif
                                @for ($i = 0; $i < $emptyStars; $i++)
                                    <i class="far fa-star"></i>
                                @endfor
                                <span>({{ number_format($prod->rating, 1) }})</span>
                            </div>
                            <h4 class="product-name">{{ $prod->name }}</h4>
                            <p class="product-description">{{ $prod->description }}</p>
                            <div class="product-footer">
                                <span class="product-price">{{ $prod->price }}</span>
                                
                                @if ($prod->has_detail && $prod->detail_image)
                                    <div style="display: flex; gap: 8px;">
                                        <button onclick="openProductDetailModal('{{ asset($prod->detail_image) }}', 'Brosur {{ $prod->name }}')" class="btn btn-sm" style="border: 2px solid var(--color-primary-light); color: var(--color-primary-dark); background: transparent; padding: 8px 14px; font-weight: 600;">
                                            <i class="fas fa-circle-info"></i> Detail
                                        </button>
                                        <a href="{{ $prod->whatsapp_url }}" target="_blank" class="btn btn-gold btn-sm"><i class="fab fa-whatsapp"></i> Pesan</a>
                                    </div>
                                @else
                                    <a href="{{ $prod->whatsapp_url }}" target="_blank" class="btn btn-gold btn-sm"><i class="fab fa-whatsapp"></i> Pesan</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Layanan Section -->
    <section id="layanan" class="services-section">
        <div class="container">
            <div class="section-header text-center">
                <span class="sub-title">Layanan Kami</span>
                <h2 class="section-title">Pilar Bisnis Kami</h2>
                <div class="gold-line-decor">
                    <span class="decor-diamond"></span>
                </div>
                <p class="section-desc">Komitmen pelayanan terbaik di berbagai sektor usaha terintegrasi demi kemaslahatan dan kepuasan Anda.</p>
            </div>
            
            <div class="services-grid">
                
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-heart-pulse"></i></div>
                    <h3>Kesehatan & Kecantikan</h3>
                    <p>Penyediaan obat herbal tradisional pilihan, alat terapi kesehatan berkualitas, serta racikan skincare alami berlisensi resmi BPOM.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-hands-holding-child"></i></div>
                    <h3>Spiritual & Edukasi</h3>
                    <p>Bimbingan ibadah mulia Haji & Umroh yang amanah serta distribusi buku-buku agama dan pengobatan Islami terpercaya.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-building-user"></i></div>
                    <h3>Investasi Properti</h3>
                    <p>Penyediaan hunian dan tanah kavling strategis di wilayah Malang raya dengan legalitas terjamin aman dan bersertifikat resmi.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-ring"></i></div>
                    <h3>Wedding Organizer</h3>
                    <p>Paket pernikahan lengkap yang terpercaya mencakup gedung, catering, dekorasi pelaminan, rias pengantin, MC, sesi foto shoot, dan mobil pengantin.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Testimoni Section -->
    <section id="testimoni" class="testimonial-section">
        <div class="container">
            <div class="section-header text-center">
                <span class="sub-title">Testimoni</span>
                <h2 class="section-title">Apa Kata Mereka?</h2>
                <div class="gold-line-decor">
                    <span class="decor-diamond"></span>
                </div>
            </div>
            
            <div class="testimonial-slider-container">
                <div class="testimonial-track" id="testimonialTrack">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card">
                        <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                        <p class="testi-text">"Minyak Balur Keris Barokah benar-benar ajaib. Pinggang saya sering kaku karena seharian kerja depan komputer. Setelah dibalur dan dipijat dengan minyak ini secara rutin tiap malam, badan kembali bugar dan tidur nyenyak."</p>
                        <div class="testi-author">
                            <div class="author-info">
                                <h5>Budi Santoso</h5>
                                <span>PNS - Malang</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="testimonial-card">
                        <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                        <p class="testi-text">"Alhamdulillah saya dan keluarga bisa berangkat Umroh dengan nyaman dan tenang berkat bimbingan CV. Srikandi Keris Barokah. Pelayanan sejak manasik di Malang hingga di tanah suci sangat prima dan teratur."</p>
                        <div class="testi-author">
                            <div class="author-info">
                                <h5>Hj. Sri Rahayu</h5>
                                <span>Ibu Rumah Tangga - Blimbing</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="testimonial-card">
                        <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                        <p class="testi-text">"Awalnya ragu membeli tanah kavling, tapi legalitas sertifikat di Kavling Pandawangi Residence sangat jelas dan dibantu pengurusannya hingga beres oleh tim SKB. Investasi properti yang sangat aman."</p>
                        <div class="testi-author">
                            <div class="author-info">
                                <h5>Achmad Fauzi</h5>
                                <span>Wiraswasta - Surabaya</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slide Controls -->
                <div class="slider-controls">
                    <button class="slider-btn prev-btn" id="prevBtn" aria-label="Sebelumnya"><i class="fas fa-arrow-left"></i></button>
                    <div class="slider-dots" id="sliderDots"></div>
                    <button class="slider-btn next-btn" id="nextBtn" aria-label="Selanjutnya"><i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak & Lokasi Section -->
    <section id="kontak" class="contact-section">
        <div class="container">
            <div class="section-header text-center">
                <span class="sub-title">Kontak & Lokasi</span>
                <h2 class="section-title">Hubungi Kami</h2>
                <div class="gold-line-decor">
                    <span class="decor-diamond"></span>
                </div>
                <p class="section-desc">Punya pertanyaan seputar produk herbal, skincare, buku, paket umroh, atau unit properti? Silakan hubungi kami atau kunjungi kantor pusat kami di Malang.</p>
            </div>
            
            <div class="contact-grid">
                
                <!-- Contact Information -->
                <div class="contact-info-panel">
                    <div class="info-item">
                        <div class="icon-wrap"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="text-wrap">
                            <h5>Kantor Pusat</h5>
                            <p>Perum Pandawangi Utama Residence 2 kav. E-3<br>Pandanwangi, Blimbing, Malang 65124<br>Jatim, Indonesia</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="icon-wrap"><i class="fas fa-phone-alt"></i></div>
                        <div class="text-wrap">
                            <h5>Telepon / WhatsApp</h5>
                            <p><a href="tel:085954572652">0859 5457 2652</a></p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="icon-wrap"><i class="fas fa-envelope"></i></div>
                        <div class="text-wrap">
                            <h5>Email Resmi</h5>
                            <p><a href="mailto:info@srikandikerisbarokah.co.id">info@srikandikerisbarokah.co.id</a></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="icon-wrap"><i class="fas fa-globe"></i></div>
                        <div class="text-wrap">
                            <h5>Website</h5>
                            <p><a href="https://www.srikandikerisbarokah.co.id" target="_blank">www.srikandikerisbarokah.co.id</a></p>
                        </div>
                    </div>

                    <div class="map-placeholder-card">
                        <div class="map-overlay">
                            <i class="fas fa-location-crosshairs map-icon"></i>
                            <h5>Peta Pandanwangi, Malang</h5>
                            <p>Klik untuk membuka Google Maps secara langsung</p>
                            <a href="https://maps.google.com/?q=Perum+Pandawangi+Utama+Residence+2+kav.+E-3+Pandanwangi+Blimbing+Malang" target="_blank" class="btn btn-outline-white btn-sm">Lihat di Google Maps</a>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form to WhatsApp -->
                <div class="contact-form-panel">
                    <h3 class="form-title">Kirim Pesan Langsung</h3>
                    <p class="form-subtitle">Tuliskan detail keluhan atau pesanan Anda. Kami akan menjawab pesan Anda secepatnya via WhatsApp.</p>
                    
                    <form id="whatsappForm" class="whatsapp-form">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" required placeholder="Contoh: Budi Santoso">
                        </div>
                        
                        <div class="form-group">
                            <label for="topic">Tujuan Pesan</label>
                            <select id="topic" required>
                                <option value="" disabled selected>Pilih keperluan...</option>
                                <option value="Konsultasi Kesehatan">Konsultasi Kesehatan / Terapi</option>
                                <option value="Pemesanan Produk">Pemesanan (Herbal/Skincare/Buku)</option>
                                <option value="Info Haji & Umroh">Informasi Haji & Umroh</option>
                                <option value="Info Properti">Informasi Kavling Properti</option>
                                <option value="Pertanyaan Umum">Pertanyaan Umum</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Pesan Anda</label>
                            <textarea id="message" rows="5" required placeholder="Tulis rincian pesanan produk, pilihan paket umroh, atau unit properti secara lengkap..."></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-gold btn-block">
                            <i class="fab fa-whatsapp"></i> Kirim ke WhatsApp Admin
                        </button>
                    </form>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="footer-wave">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86C222.05,62.86,151.77,38.83,83.1,22.81,55.05,16.22,26.9,8.75,0,0V120H1200V95.8C1129.81,113.8,1055.67,111.3,985.66,92.83Z" fill="#07180f"></path>
            </svg>
        </div>
        <div class="container footer-content-grid">
            <div class="footer-brand-info">
                <div class="footer-logo">
                    <svg viewBox="0 0 100 100" class="footer-svg-logo">
                        <circle cx="50" cy="50" r="46" fill="none" stroke="#cfa852" stroke-width="2"/>
                        <path d="M50 80 L50 48 M48 48 L52 48 L53 45 L47 45 Z" stroke="#cfa852" stroke-width="2" fill="#cfa852"/>
                        <path d="M50 45 C47 40, 53 35, 50 30 C47 25, 53 20, 50 14 C48 20, 44 25, 48 30 C51 35, 45 40, 48 45 Z" fill="url(#goldGradient)" stroke="#cfa852" stroke-width="0.5"/>
                        <path d="M28 50 C28 42, 38 45, 42 48 C36 49, 32 58, 28 50 Z" fill="#2d6a4f"/>
                        <path d="M72 50 C72 42, 62 45, 58 48 C64 49, 68 58, 72 50 Z" fill="#2d6a4f"/>
                        <path d="M47 52 H53 V58 H47 Z" fill="#cfa852"/>
                    </svg>
                    <span>CV. Srikandi Keris Barokah</span>
                </div>
                <p class="footer-desc">Solusi terpadu andalan keluarga Anda di berbagai pilar kehidupan: Kesehatan, Kecantikan, Spiritual, Ibadah, dan Investasi Hunian Properti Masa Depan yang Amanah.</p>
                <div class="footer-slogan-box">
                    <span class="footer-slogan">"Sehat Alami, Hidup Berkah"</span>
                </div>
            </div>
            
            <div class="footer-links">
                <h4>Navigasi</h4>
                <ul>
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#tentang">Tentang Kami</a></li>
                    <li><a href="#produk">Produk Kami</a></li>
                    <li><a href="#layanan">Pilar Solusi</a></li>
                    <li><a href="#kontak">Kontak Kami</a></li>
                    <li><a href="{{ route('login') }}"><i class="fas fa-user-shield"></i> Area Admin</a></li>
                </ul>
            </div>
            
            <div class="footer-socials">
                <h4>Hubungi Kami</h4>
                <p><i class="fas fa-map-marker-alt footer-contact-icon"></i> Pandanwangi, Blimbing, Malang</p>
                <p><i class="fas fa-phone footer-contact-icon"></i> 0859 5457 2652</p>
                <p><i class="fas fa-envelope footer-contact-icon"></i> info@srikandikerisbarokah.co.id</p>
                
                <div class="social-icons">
                    <a href="https://wa.me/6285954572652" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom text-center">
            <div class="container footer-bottom-wrapper">
                <p>&copy; 2026 CV. Srikandi Keris Barokah. Semua Hak Dilindungi. | Sehat Alami, Hidup Berkah</p>
            </div>
        </div>
    </footer>

    <!-- Image Modal for Brochure Details -->
    <div id="imageModal" class="image-modal spa-hide">
        <span class="modal-close">&times;</span>
        <img class="modal-content" id="modalImg" src="">
        <div id="modalCaption" class="modal-caption"></div>
    </div>

    <!-- Floating WhatsApp Widget -->
    <a href="https://wa.me/6285954572652?text=Halo%20CV.%20Srikandi%20Keris%20Barokah%2C%20saya%20tertarik%20dengan%20produk%2Flayanan%20Anda" target="_blank" class="floating-wa-btn" aria-label="Chat WhatsApp">
        <i class="fab fa-whatsapp"></i>
        <span class="wa-tooltip">Hubungi Kami</span>
    </a>

    <!-- Custom Script via Laravel Asset Helper -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
