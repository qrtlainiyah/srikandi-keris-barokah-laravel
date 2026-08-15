<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Produk | CV. Srikandi Keris Barokah</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <style>
        body {
            background-color: var(--color-bg-alt);
            font-family: var(--font-body);
            color: var(--color-text-dark);
            min-height: 100vh;
            padding-top: 100px;
            padding-bottom: 50px;
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

        .form-card {
            background: #fff;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-md);
            padding: 40px;
            max-width: 800px;
            margin: 0 auto;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .form-header {
            border-bottom: 1px solid rgba(0,0,0,0.06);
            padding-bottom: 20px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .form-header h2 {
            font-family: var(--font-heading);
            color: var(--color-primary-dark);
            font-size: 24px;
        }

        .form-header-icon {
            width: 48px;
            height: 48px;
            background: rgba(207, 168, 82, 0.1);
            color: var(--color-gold-dark);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-group.full-width {
            grid-column: span 2;
        }

        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: var(--color-primary-dark);
            margin-bottom: 8px;
        }

        .form-control {
            width: 100%;
            border: 1px solid rgba(0,0,0,0.12);
            border-radius: var(--radius-sm);
            padding: 12px 16px;
            font-size: 14px;
            font-family: var(--font-body);
            color: var(--color-text-dark);
            transition: var(--transition-smooth);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--color-gold);
            box-shadow: 0 0 10px rgba(207, 168, 82, 0.15);
        }

        textarea.form-control {
            resize: vertical;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 15px;
            margin-bottom: 10px;
        }

        .checkbox-input {
            width: 18px;
            height: 18px;
            accent-color: var(--color-gold);
            cursor: pointer;
        }

        .btn-submit {
            background: linear-gradient(135deg, var(--color-primary-medium) 0%, var(--color-primary-dark) 100%);
            color: #fff;
            border: none;
            padding: 14px 30px;
            border-radius: var(--radius-full);
            cursor: pointer;
            font-weight: 700;
            font-size: 14px;
            transition: var(--transition-smooth);
            box-shadow: 0 4px 15px rgba(11,36,22,0.25);
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(11,36,22,0.4);
            background: var(--color-primary-dark);
        }

        .btn-cancel {
            background: transparent;
            color: var(--color-text-muted);
            border: 1px solid rgba(0,0,0,0.15);
            padding: 12px 30px;
            border-radius: var(--radius-full);
            cursor: pointer;
            font-weight: 600;
            font-size: 14px;
            transition: var(--transition-smooth);
        }

        .btn-cancel:hover {
            background: rgba(0,0,0,0.05);
            color: var(--color-primary-dark);
        }

        .form-footer {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            border-top: 1px solid rgba(0,0,0,0.06);
            padding-top: 25px;
            margin-top: 15px;
        }

        .alert-error {
            background: rgba(239, 68, 68, 0.08);
            border: 1px solid rgba(239, 68, 68, 0.2);
            color: #b91c1c;
            padding: 12px 16px;
            border-radius: var(--radius-sm);
            font-size: 13px;
            margin-bottom: 25px;
        }

        .alert-error ul {
            padding-left: 20px;
            list-style: disc;
        }

        .file-hint {
            font-size: 11px;
            color: var(--color-text-muted);
            margin-top: 5px;
        }
        
        .tab-back {
            margin-bottom: 20px;
            display: inline-block;
        }

        .tab-back-link {
            font-size: 14px;
            color: var(--color-primary-medium);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        .tab-back-link:hover {
            color: var(--color-gold-dark);
        }

        /* Image preview card */
        .preview-box {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-top: 10px;
            background: var(--color-bg-alt);
            padding: 10px;
            border-radius: var(--radius-sm);
            border: 1px dashed rgba(0,0,0,0.1);
        }

        .preview-img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: var(--radius-sm);
            border: 1px solid rgba(0,0,0,0.05);
        }

        .preview-details {
            font-size: 12px;
            color: var(--color-text-muted);
        }

        @media (max-width: 768px) {
            .form-card {
                padding: 20px;
            }
            .form-grid {
                grid-template-columns: 1fr;
            }
            .form-group.full-width {
                grid-column: span 1;
            }
            .form-footer {
                flex-direction: column-reverse;
                gap: 10px;
            }
            .form-footer .btn-submit,
            .form-footer .btn-cancel {
                width: 100%;
                text-align: center;
                padding: 12px;
            }
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
                        <path d="M50 45 C47 40, 53 35, 50 30 Z" fill="url(#goldGradient)"/>
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
                <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                    @csrf
                    <button type="submit" class="btn-logout"><i class="fas fa-sign-out-alt"></i> Keluar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container" style="max-width: 800px;">
        
        <div class="tab-back">
            <a href="{{ route('admin.products.index') }}" class="tab-back-link">
                <i class="fas fa-arrow-left"></i> Kembali ke Dasbor
            </a>
        </div>

        @if ($errors->any())
            <div class="alert-error">
                <strong>Terjadi kesalahan:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-card">
            <div class="form-header">
                <div class="form-header-icon">
                    <i class="fas fa-pen-to-square"></i>
                </div>
                <div>
                    <h2>Ubah Produk</h2>
                    <p style="color:var(--color-text-muted); font-size:13px;">Ubah rincian informasi produk <strong>{{ $product->name }}</strong>.</p>
                </div>
            </div>

            <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="form-grid">
                    <div class="form-group full-width">
                        <label for="name" class="form-label">Nama Produk / Layanan</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Contoh: Serum Wajah Herbal Srikandi" value="{{ old('name', $product->name) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="category" class="form-label">Kategori</label>
                        <select name="category" id="category" class="form-control" required>
                            <option value="" disabled>Pilih Kategori...</option>
                            <option value="kesehatan" {{ old('category', $product->category) == 'kesehatan' ? 'selected' : '' }}>Kesehatan & Herbal</option>
                            <option value="terapi" {{ old('category', $product->category) == 'terapi' ? 'selected' : '' }}>Alat Terapi</option>
                            <option value="skincare" {{ old('category', $product->category) == 'skincare' ? 'selected' : '' }}>Skincare</option>
                            <option value="buku" {{ old('category', $product->category) == 'buku' ? 'selected' : '' }}>Buku</option>
                            <option value="travel" {{ old('category', $product->category) == 'travel' ? 'selected' : '' }}>Haji & Umroh</option>
                            <option value="properti" {{ old('category', $product->category) == 'properti' ? 'selected' : '' }}>Properti</option>
                            <option value="wo" {{ old('category', $product->category) == 'wo' ? 'selected' : '' }}>Wedding Organizer</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="price" class="form-label">Harga Tampilan</label>
                        <input type="text" name="price" id="price" class="form-control" placeholder="Contoh: Rp 85.000 atau Rp 2 Jt (DP)" value="{{ old('price', $product->price) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="badge" class="form-label">Label (Badge)</label>
                        <input type="text" name="badge" id="badge" class="form-control" placeholder="Contoh: Terlaris, Premium, BPOM (Opsional)" value="{{ old('badge', $product->badge) }}">
                    </div>

                    <div class="form-group">
                        <label for="rating" class="form-label">Rating</label>
                        <input type="number" name="rating" id="rating" class="form-control" min="1.0" max="5.0" step="0.1" placeholder="Contoh: 5.0" value="{{ old('rating', $product->rating) }}" required>
                    </div>

                    <div class="form-group full-width">
                        <label for="description" class="form-label">Deskripsi Singkat</label>
                        <textarea name="description" id="description" class="form-control" rows="4" placeholder="Tuliskan deskripsi khasiat, kelayakan, atau detail produk..." required>{{ old('description', $product->description) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image" class="form-label">Foto Produk (Utama)</label>
                        <input type="file" name="image" id="image" class="form-control">
                        <p class="file-hint">Upload file baru untuk mengganti. Format: jpg, png, jpeg (Maks. 2MB).</p>
                        @if($product->image)
                            <div class="preview-box">
                                <img src="{{ asset($product->image) }}" alt="Preview" class="preview-img">
                                <div class="preview-details">
                                    <strong>File aktif:</strong> {{ basename($product->image) }}
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="icon" class="form-label">FontAwesome Icon (Alternatif)</label>
                        <input type="text" name="icon" id="icon" class="form-control" placeholder="Contoh: fas fa-droplet" value="{{ old('icon', $product->icon) }}">
                        <p class="file-hint">Digunakan jika Foto Utama kosong. Contoh: <code>fas fa-droplet</code></p>
                    </div>

                    <div class="form-group full-width" style="border-top: 1px solid rgba(0,0,0,0.06); padding-top: 15px;">
                        <div class="checkbox-group">
                            <input type="checkbox" name="has_detail" id="has_detail" value="1" class="checkbox-input" {{ old('has_detail', $product->has_detail) ? 'checked' : '' }} onchange="toggleDetailField()">
                            <label for="has_detail" class="form-label" style="margin-bottom:0; cursor:pointer;">Memiliki Brosur Detail (Pop-up modal)</label>
                        </div>
                    </div>

                    <div class="form-group full-width" id="detail_image_group" style="display: none;">
                        <label for="detail_image" class="form-label">Brosur Detail (Pop-up Image)</label>
                        <input type="file" name="detail_image" id="detail_image" class="form-control">
                        <p class="file-hint">Upload file baru untuk mengganti brosur aktif.</p>
                        @if($product->detail_image)
                            <div class="preview-box">
                                <img src="{{ asset($product->detail_image) }}" alt="Preview" class="preview-img">
                                <div class="preview-details">
                                    <strong>Brosur aktif:</strong> {{ basename($product->detail_image) }}
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="form-group full-width" style="border-top: 1px solid rgba(0,0,0,0.06); padding-top: 15px;">
                        <label for="whatsapp_url" class="form-label">WhatsApp URL Kustom (Opsional)</label>
                        <input type="text" name="whatsapp_url" id="whatsapp_url" class="form-control" placeholder="Hubungi wa.me/..." value="{{ old('whatsapp_url', $product->whatsapp_url) }}">
                        <p class="file-hint">Biarkan kosong untuk otomatis membuat link order berdasarkan nama produk.</p>
                    </div>
                </div>

                <div class="form-footer">
                    <a href="{{ route('admin.products.index') }}" class="btn-cancel">Batal</a>
                    <button type="submit" class="btn-submit"><i class="fas fa-save"></i> Simpan Perubahan</button>
                </div>
            </form>
        </div>

    </div>

    <script>
        function toggleDetailField() {
            var checkBox = document.getElementById("has_detail");
            var detailGroup = document.getElementById("detail_image_group");
            if (checkBox.checked == true){
                detailGroup.style.display = "block";
            } else {
                detailGroup.style.display = "none";
            }
        }
        
        // Run on load to set initial state
        window.onload = function() {
            toggleDetailField();
        };
    </script>
</body>
</html>
