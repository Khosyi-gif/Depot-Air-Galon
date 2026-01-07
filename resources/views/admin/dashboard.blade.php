@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <h2 class="fw-bold mb-0">Dashboard Admin</h2>
        <p class="text-muted">Selamat datang, {{ Auth::user()->name }}!</p>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <h6 class="text-muted mb-1">Total Produk</h6>
                        <h2 class="fw-bold mb-0">{{ $totalProducts }}</h2>
                    </div>
                    <div class="bg-primary bg-opacity-10 rounded p-3">
                        <i class="bi bi-box-seam fs-3 text-primary"></i>
                    </div>
                </div>
                <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-outline-primary w-100">
                    <i class="bi bi-arrow-right"></i> Lihat Produk
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <h6 class="text-muted mb-1">Total Pesanan</h6>
                        <h2 class="fw-bold mb-0">{{ $totalOrders }}</h2>
                    </div>
                    <div class="bg-success bg-opacity-10 rounded p-3">
                        <i class="bi bi-cart-check fs-3 text-success"></i>
                    </div>
                </div>
                <small class="text-muted">Semua pesanan</small>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <h6 class="text-muted mb-1">Pesanan Pending</h6>
                        <h2 class="fw-bold mb-0">{{ $pendingOrders }}</h2>
                    </div>
                    <div class="bg-warning bg-opacity-10 rounded p-3">
                        <i class="bi bi-clock-history fs-3 text-warning"></i>
                    </div>
                </div>
                <small class="text-muted">Menunggu proses</small>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-4">
                    <i class="bi bi-lightning-fill text-warning"></i> Quick Actions
                </h5>
                <div class="row g-3">
                    <div class="col-md-3">
                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary w-100 py-3">
                            <i class="bi bi-plus-circle fs-4 d-block mb-2"></i>
                            Tambah Produk
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="{{ route('admin.products.index') }}" class="btn btn-outline-primary w-100 py-3">
                            <i class="bi bi-list-ul fs-4 d-block mb-2"></i>
                            Kelola Produk
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="{{ route('profile.edit') }}" class="btn btn-outline-secondary w-100 py-3">
                            <i class="bi bi-person-gear fs-4 d-block mb-2"></i>
                            Edit Profile
                        </a>
                    </div>
                    <div class="col-md-3">
                        <form method="POST" action="{{ route('logout') }}" class="d-inline w-100">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger w-100 py-3">
                                <i class="bi bi-box-arrow-right fs-4 d-block mb-2"></i>
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection