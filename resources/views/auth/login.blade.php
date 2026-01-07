<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Depot Air Galon</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .login-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            padding: 40px;
            width: 100%;
            max-width: 420px;
        }
        
        .login-icon {
            font-size: 3rem;
            color: #667eea;
            margin-bottom: 20px;
        }
        
        .btn-login {
            background: #667eea;
            border: none;
            padding: 12px;
            font-weight: 600;
            border-radius: 8px;
        }
        
        .btn-login:hover {
            background: #5568d3;
        }
        
        .form-control {
            padding: 12px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="text-center">
            <i class="bi bi-droplet-fill login-icon"></i>
            <h3 class="fw-bold mb-2">Depot Air Galon</h3>
            <p class="text-muted mb-4">Silakan login untuk melanjutkan</p>
        </div>
        
        <!-- Session Status -->
        @if (session('status'))
        <div class="alert alert-success mb-3">
            {{ session('status') }}
        </div>
        @endif
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                       value="{{ old('email') }}" required autofocus>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <!-- Password -->
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <!-- Remember Me -->
            <div class="form-check mb-3">
                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">
                    Ingat saya
                </label>
            </div>
            
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-login">
                    <i class="bi bi-box-arrow-in-right"></i> Login
                </button>
                
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="btn btn-link text-decoration-none">
                    Lupa password?
                </a>
                @endif
            </div>
        </form>
        
        <hr class="my-4">
        
        <div class="text-center">
            <p class="text-muted small mb-0">
                &copy; {{ date('Y') }} Depot Air Galon. All rights reserved.
            </p>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>