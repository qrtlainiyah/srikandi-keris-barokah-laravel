<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasbor Admin | CV. Srikandi Keris Barokah</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <style>
        body {
            background-color: var(--color-bg-light);
            font-family: var(--font-body);
            color: var(--color-text-dark);
            min-height: 100vh;
            padding-top: 100px; /* navbar offset */
        }

        .admin-nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 80px;
            background-color: var(--color-primary-dark);
            border-bottom: 2px solid var(--color-gold);
            z-index: 999;
            display: flex;
            align-items: center;
        }

        .admin-nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .admin-logo-link {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--color-text-light);
        }

        .admin-user-info {
            display: flex;
            align-items: center;
            gap: 20px;
            color: var(--color-text-light);
        }

        .admin-username {
            font-weight: 600;
            font-size: 14px;
        }

        .btn-logout {
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: var(--color-text-light);
            padding: 8px 16px;
            font-size: 13px;
            cursor: pointer;
            border-radius: var(--radius-full);
            transition: var(--transition-smooth);
        }

        .btn-logout:hover {
            background: rgba(239, 68, 68, 0.2);
            border-color: #ef4444;
        }

        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .dashboard-title h2 {
            font-family: var(--font-heading);
            color: var(--color-primary-dark);
            font-size: 28px;
            margin-bottom: 5px;
        }

        .dashboard-title p {
            color: var(--color-text-muted);
            font-size: 14px;
        }

        .btn-add-product {
            background: linear-gradient(135deg, var(--color-gold-light) 0%, var(--color-gold) 50%, var(--color-gold-dark) 100%);
            color: var(--color-bg-dark);
            border: none;
            box-shadow: 0 4px 15px rgba(207, 168, 82, 0.3);
            padding: 12px 24px;
            border-radius: var(--radius-full);
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: var(--transition-smooth);
        }

        .btn-add-product:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-gold);
        }

        /* Table Card Layout */
        .table-card {
            background: #fff;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-md);
            overflow: hidden;
            border: 1px solid rgba(0,0,0,0.05);
            margin-bottom: 50px;
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }

        .admin-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .admin-table th {
            background: var(--color-primary-dark);
            color: var(--color-text-light);
            font-family: var(--font-heading);
            font-size: 13px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            padding: 16px 20px;
            font-weight: 600;
        }

        .admin-table td {
            padding: 18px 20px;
            border-bottom: 1px solid rgba(0,0,0,0.06);
            vertical-align: middle;
            font-size: 14px;
        }

        .admin-table tr:last-child td {
            border-bottom: none;
        }

        .admin-table tr:hover td {
            background-color: var(--color-bg-alt);
        }

        /* Product visual representation */
        .prod-media {
            width: 60px;
            height: 60px;
            border-radius: var(--radius-sm);
            object-fit: cover;
            background: var(--color-bg-alt);
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .prod-media i {
            font-size: 24px;
            color: var(--color-primary-light);
        }

        .prod-name {
            font-weight: 700;
            color: var(--color-primary-dark);
            margin-bottom: 4px;
            font-size: 15px;
        }

        .prod-category {
            font-size: 11px;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
            color: var(--color-text-muted);
            display: inline-block;
            background: var(--color-bg-alt);
            padding: 2px 8px;
            border-radius: var(--radius-full);
        }

        .prod-desc-cell {
            max-width: 250px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            color: var(--color-text-muted);
        }

        .prod-price {
            font-weight: 700;
            color: var(--color-primary-medium);
        }

        .badge-rating {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            font-weight: 700;
            color: var(--color-gold-dark);
            font-size: 13px;
        }

        .badge-custom {
            display: inline-block;
            font-size: 11px;
            font-weight: 700;
            color: var(--color-bg-dark);
            background: var(--color-gold-light);
            padding: 3px 10px;
            border-radius: var(--radius-full);
            box-shadow: 0 2px 5px rgba(207,168,82,0.15);
            border: 1px solid rgba(207,168,82,0.3);
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .btn-action {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border: none;
            transition: var(--transition-smooth);
            font-size: 14px;
        }

        .btn-action * {
            pointer-events: none;
        }

        .btn-edit {
            background-color: rgba(207, 168, 82, 0.15);
            color: var(--color-gold-dark);
        }

        .btn-edit:hover {
            background-color: var(--color-gold);
            color: var(--color-bg-dark);
        }

        .btn-delete {
            background-color: rgba(239, 68, 68, 0.1);
            color: #ef4444;
        }

        .btn-delete:hover {
            background-color: #ef4444;
            color: #fff;
        }

        .btn-delete.confirm-warning {
            background-color: #f97316 !important;
            color: #fff !important;
            transform: scale(1.15);
            box-shadow: 0 0 12px rgba(249, 115, 22, 0.5);
        }

        /* Notifications */
        .alert-success {
            background: rgba(34, 197, 94, 0.12);
            border: 1px solid rgba(34, 197, 94, 0.25);
            color: #15803d;
            padding: 16px 20px;
            border-radius: var(--radius-md);
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            font-weight: 500;
            box-shadow: 0 4px 10px rgba(0,0,0,0.02);
        }

        .alert-success i {
            font-size: 18px;
        }
    </style>
</head>
<body>

    <!-- Admin Top Nav -->
    <nav class="admin-nav">
        <div class="container admin-nav-container">
            <a href="{{ url('/') }}" class="admin-logo-link">
                <div class="logo-svg-wrapper" style="width: 36px; height: 36px;">
                    <svg viewBox="0 0 100 100" class="company-logo-svg">
                        <circle cx="50" cy="50" r="46" fill="#07180f" stroke="#cfa852" stroke-width="2.5"/>
                        <path d="M50 82 L50 48 M48 48 L52 48 L53 45 L47 45 Z" stroke="#cfa852" stroke-width="2.5" fill="#cfa852"/>
                        <path d="M50 45 C47 40, 53 35, 50 30 C47 25, 53 20, 50 14 C48 20, 44 25, 48 30 Z" fill="url(#goldGradient)" stroke="#cfa852" stroke-width="0.5"/>
                        <path d="M28 50 C28 42, 38 45, 42 48 C36 49, 32 58, 28 50 Z" fill="#2d6a4f"/>
                        <path d="M72 50 C72 42, 62 45, 58 48 C64 49, 68 58, 72 50 Z" fill="#2d6a4f"/>
                        <path d="M47 52 H53 V58 H47 Z" fill="#cfa852"/>
                    </svg>
                </div>
                <div class="logo-text" style="font-size: 12px;">
                    <span class="brand-name" style="font-size: 12px; color:#fff;">CV. SRIKANDI KERIS BAROKAH</span>
                    <span style="font-size: 9px; color: var(--color-gold); font-weight: bold; letter-spacing: 0.5px;">ADMIN PANEL</span>
                </div>
            </a>
            
            <div class="admin-user-info">
                <span class="admin-username"><i class="fas fa-user-shield"></i> {{ Auth::user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                    @csrf
                    <button type="submit" class="btn-logout"><i class="fas fa-sign-out-alt"></i> Keluar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        
        <!-- Alerts -->
        @if (session('success'))
            <div class="alert-success">
                <i class="fas fa-circle-check"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <div class="dashboard-header">
            <div class="dashboard-title">
                <h2>Dasbor Produk & Layanan</h2>
                <p>Kelola semua katalog produk, paket, skincare, properti, dan wedding organizer Anda di sini.</p>
            </div>
            <div>
                <a href="{{ route('admin.products.create') }}" class="btn-add-product">
                    <i class="fas fa-plus"></i> Tambah Produk Baru
                </a>
            </div>
        </div>

        <div class="table-card">
            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th width="80">Media</th>
                            <th>Detail Produk</th>
                            <th>Harga</th>
                            <th width="120">Label</th>
                            <th width="100">Rating</th>
                            <th width="120">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $prod)
                            <tr>
                                <td data-label="Media">
                                    @if($prod->image)
                                        <img src="{{ asset($prod->image) }}" alt="{{ $prod->name }}" class="prod-media">
                                    @elseif($prod->icon)
                                        <div class="prod-media">
                                            <i class="{{ $prod->icon }}"></i>
                                        </div>
                                    @else
                                        <div class="prod-media">
                                            <i class="fas fa-box"></i>
                                        </div>
                                    @endif
                                </td>
                                <td data-label="Produk">
                                    <div class="prod-name">{{ $prod->name }}</div>
                                    <span class="prod-category">
                                        @switch($prod->category)
                                            @case('kesehatan') Kesehatan & Herbal @break
                                            @case('terapi') Alat Terapi @break
                                            @case('skincare') Skincare @break
                                            @case('buku') Buku @break
                                            @case('travel') Haji & Umroh @break
                                            @case('properti') Properti @break
                                            @case('wo') Wedding Organizer @break
                                            @default {{ $prod->category }}
                                        @endswitch
                                    </span>
                                    <div class="prod-desc-cell" title="{{ $prod->description }}">
                                        {{ $prod->description }}
                                    </div>
                                </td>
                                <td data-label="Harga">
                                    <span class="prod-price">{{ $prod->price }}</span>
                                </td>
                                <td data-label="Label">
                                    @if($prod->badge)
                                        <span class="badge-custom">{{ $prod->badge }}</span>
                                    @else
                                        <span style="color:var(--color-text-muted); font-style:italic; font-size:12px;">Tanpa Label</span>
                                    @endif
                                </td>
                                <td data-label="Rating">
                                    <span class="badge-rating">
                                        <i class="fas fa-star" style="color: var(--color-gold);"></i> 
                                        {{ number_format($prod->rating, 1) }}
                                    </span>
                                </td>
                                <td data-label="Aksi">
                                    <div class="action-buttons">
                                        <a href="{{ route('admin.products.edit', $prod->id) }}" class="btn-action btn-edit" title="Ubah Produk">
                                            <i class="fas fa-pen-to-square"></i>
                                        </a>
                                        <form action="{{ route('admin.products.destroy', $prod->id) }}" method="POST" class="delete-product-form" style="display: inline-block; margin: 0;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn-action btn-delete btn-delete-confirm" title="Hapus Produk" data-step="1">
                                                <i class="fas fa-trash-can"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" style="text-align: center; padding: 40px; color: var(--color-text-muted);">
                                    <i class="fas fa-folder-open" style="font-size: 40px; margin-bottom: 15px; display: block; color: rgba(0,0,0,0.1);"></i>
                                    Belum ada produk terdaftar. Klik "Tambah Produk Baru" untuk menambahkan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const deleteButtons = document.querySelectorAll('.btn-delete-confirm');
            deleteButtons.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    const step = btn.getAttribute('data-step');
                    const icon = btn.querySelector('i');
                    
                    if (step === '1') {
                        // First click: transition to confirmation state
                        btn.setAttribute('data-step', '2');
                        btn.classList.add('confirm-warning');
                        btn.setAttribute('title', 'Klik sekali lagi untuk menghapus!');
                        icon.className = 'fas fa-circle-exclamation';
                        
                        // Reset after 3 seconds of inactivity
                        setTimeout(() => {
                            if (btn.getAttribute('data-step') === '2') {
                                btn.setAttribute('data-step', '1');
                                btn.classList.remove('confirm-warning');
                                btn.setAttribute('title', 'Hapus Produk');
                                icon.className = 'fas fa-trash-can';
                            }
                        }, 3000);
                    } else if (step === '2') {
                        // Second click: prevent double submission and submit
                        btn.setAttribute('data-step', '3');
                        btn.classList.remove('confirm-warning');
                        btn.style.opacity = '0.5';
                        btn.style.pointerEvents = 'none';
                        icon.className = 'fas fa-spinner fa-spin'; // Show loading spinner
                        
                        btn.closest('form').submit();
                    }
                });
            });
        });
    </script>
</body>
</html>
