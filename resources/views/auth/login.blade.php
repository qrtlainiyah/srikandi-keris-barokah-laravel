<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | CV. Srikandi Keris Barokah</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <style>
        body {
            background: radial-gradient(circle at center, var(--color-primary-medium) 0%, var(--color-primary-dark) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            font-family: var(--font-body);
            color: var(--color-text-light);
            position: relative;
            overflow: hidden;
        }

        /* Decorative background elements */
        .bg-decor-circle {
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(207,168,82,0.1) 0%, rgba(0,0,0,0) 70%);
            z-index: 1;
        }
        .bg-decor-circle.one { top: -100px; left: -100px; }
        .bg-decor-circle.two { bottom: -100px; right: -100px; }

        .login-wrapper {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 450px;
            background: rgba(11, 36, 22, 0.7);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(207, 168, 82, 0.25);
            border-radius: var(--radius-lg);
            padding: 40px 30px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
            animation: fadeIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-header {
            text-align: center;
            margin-bottom: 35px;
        }

        .login-logo {
            width: 75px;
            height: 75px;
            margin: 0 auto 15px;
            filter: drop-shadow(0 4px 10px rgba(207, 168, 82, 0.3));
        }

        .login-title {
            font-family: var(--font-heading);
            color: var(--color-text-gold);
            font-size: 24px;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .login-subtitle {
            font-size: 13px;
            color: var(--color-text-muted);
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .form-group {
            margin-bottom: 22px;
            position: relative;
        }

        .form-label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            color: var(--color-text-gold);
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .input-group {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--color-gold);
            font-size: 14px;
        }

        .form-control {
            width: 100%;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-md);
            padding: 14px 16px 14px 44px;
            color: #fff;
            font-family: var(--font-body);
            font-size: 14px;
            transition: var(--transition-smooth);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--color-gold);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 15px rgba(207, 168, 82, 0.15);
        }

        .form-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 25px;
            font-size: 13px;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            color: var(--color-text-muted);
            user-select: none;
        }

        .checkbox-input {
            accent-color: var(--color-gold);
            width: 16px;
            height: 16px;
        }

        .btn-login {
            width: 100%;
            background: linear-gradient(135deg, var(--color-gold-light) 0%, var(--color-gold) 50%, var(--color-gold-dark) 100%);
            color: var(--color-bg-dark);
            border: none;
            padding: 14px;
            font-size: 15px;
            font-weight: 700;
            border-radius: var(--radius-md);
            cursor: pointer;
            box-shadow: 0 6px 20px rgba(207, 168, 82, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: var(--transition-smooth);
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(207, 168, 82, 0.5);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .alert-error {
            background: rgba(239, 68, 68, 0.15);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #fca5a5;
            padding: 12px 16px;
            border-radius: var(--radius-md);
            font-size: 13px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .back-to-site {
            text-align: center;
            margin-top: 25px;
        }

        .back-link {
            font-size: 13px;
            color: var(--color-text-muted);
            transition: var(--transition-smooth);
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .back-link:hover {
            color: var(--color-text-gold);
        }
    </style>
</head>
<body>

    <div class="bg-decor-circle one"></div>
    <div class="bg-decor-circle two"></div>

    <div class="login-wrapper">
        <div class="login-header">
            <div class="login-logo">
                <svg viewBox="0 0 100 100" class="company-logo-svg">
                    <circle cx="50" cy="50" r="46" fill="#07180f" stroke="#cfa852" stroke-width="2.5"/>
                    <circle cx="50" cy="50" r="42" fill="none" stroke="#cfa852" stroke-width="0.7" stroke-dasharray="3 3"/>
                    <path d="M50 82 L50 48 M48 48 L52 48 L53 45 L47 45 Z" stroke="#cfa852" stroke-width="2.5" stroke-linecap="round" fill="#cfa852"/>
                    <path d="M50 45 C47 40, 53 35, 50 30 C47 25, 53 20, 50 14 C48 20, 44 25, 48 30 C51 35, 45 40, 48 45 Z" fill="url(#goldGradient)" stroke="#cfa852" stroke-width="0.5"/>
                    <path d="M28 50 C28 42, 38 45, 42 48 C36 49, 32 58, 28 50 Z" fill="#2d6a4f" opacity="0.85"/>
                    <path d="M72 50 C72 42, 62 45, 58 48 C64 49, 68 58, 72 50 Z" fill="#2d6a4f" opacity="0.85"/>
                    <path d="M47 52 H53 V58 H47 Z" fill="#cfa852"/>
                    <defs>
                        <linearGradient id="goldGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#f3e098" />
                            <stop offset="50%" stop-color="#cfa852" />
                            <stop offset="100%" stop-color="#a67c1e" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <h1 class="login-title">SKB Admin Panel</h1>
            <p class="login-subtitle">Masuk Ke Dasbor</p>
        </div>

        @if ($errors->any())
            <div class="alert-error">
                <i class="fas fa-circle-exclamation"></i>
                <span>{{ $errors->first() }}</span>
            </div>
        @endif

        <form action="{{ url('/login') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="email" class="form-label">Alamat Email</label>
                <div class="input-group">
                    <i class="fas fa-envelope input-icon"></i>
                    <input type="email" name="email" id="email" class="form-control" placeholder="admin@srikandikerisbarokah.co.id" value="{{ old('email') }}" required autofocus>
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Kata Sandi</label>
                <div class="input-group">
                    <i class="fas fa-lock input-icon"></i>
                    <input type="password" name="password" id="password" class="form-control" placeholder="••••••••" required>
                </div>
            </div>

            <div class="form-options">
                <label class="checkbox-label">
                    <input type="checkbox" name="remember" class="checkbox-input">
                    <span>Ingat Saya</span>
                </label>
            </div>

            <button type="submit" class="btn-login">
                <span>Masuk Sekarang</span> <i class="fas fa-arrow-right"></i>
            </button>
        </form>

        <div class="back-to-site">
            <a href="{{ url('/') }}" class="back-link">
                <i class="fas fa-arrow-left"></i> Kembali ke Beranda Utama
            </a>
        </div>
    </div>

</body>
</html>
