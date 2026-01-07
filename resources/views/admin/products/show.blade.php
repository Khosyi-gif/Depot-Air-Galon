@extends('layouts.admin')

@section('title', 'Detail Produk')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Produk</a></li>
                <li class="breadcrumb-item active">Detail Produk</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <!-- Gambar Produk -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body text-center">
                @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" 
                     class="img-fluid rounded" style="max-height: 300px;">
                @else
                <div class="bg-light rounded p-5">
                    <i class="bi bi-image fs-1 text-muted"></i>
                    <p class="text-muted mb-0 mt-2">Tidak ada gambar</p>
                </div>
                @endif
            </div>
        </div>

        <!-- Status & Info -->
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h6 class="fw-bold mb-3">Status & Info</h6>
                <table class="table table-sm table-borderless mb-0">
                    <tr>
                        <td class="text-muted">Status:</td>
                        <td>
                            @if($product->is_active)
                            <span class="badge bg-success">Aktif</span>
                            @else
                            <span class="badge bg-secondary">Nonaktif</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">Stok:</td>
                        <td>
                            @if($product->stock > 10)
                            <span class="badge bg-success">{{ $product->stock }} unit</span>
                            @elseif($product->stock > 0)
                            <span class="badge bg-warning">{{ $product->stock }} unit</span>
                            @else
                            <span class="badge bg-danger">Habis</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">Dibuat:</td>
                        <td class="small">{{ $product->created_at->format('d M Y H:i') }}</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Update:</td>
                        <td class="small">{{ $product->updated_at->format('d M Y H:i') }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <!-- Detail Produk -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <span class="badge bg-secondary mb-2">{{ ucfirst($product->category) }}</span>
                        <h3 class="fw-bold mb-0">{{ $product->name }}</h3>
                    </div>
                    <h3 class="text-primary mb-0">Rp {{ number_format($product->price, 0, ',', '.') }}</h3>
                </div>

                <hr>

                <h6 class="fw-bold mb-2">Deskripsi</h6>
                @if($product->description)
                <p class="text-muted">{{ $product->description }}</p>
                @else
                <p class="text-muted fst-italic">Tidak ada deskripsi</p>
                @endif

                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold mb-2">Informasi Produk</h6>
                        <table class="table table-sm table-borderless">
                            <tr>
                                <td class="text-muted" width="40%">Kategori:</td>
                                <td class="fw-bold">{{ ucfirst($product->category) }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Harga:</td>
                                <td class="fw-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Stok:</td>
                                <td class="fw-bold">{{ $product->stock }} unit</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Aksi -->
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h6 class="fw-bold mb-3">Aksi</h6>
                <div class="d-flex gap-2">
                    <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning">
                        <i class="bi bi-pencil"></i> Edit Produk
                    </a>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="ms-auto" 
                          onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-trash"></i> Hapus Produk
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

