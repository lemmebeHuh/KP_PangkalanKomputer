@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Produk</h2>

    <table class="table">
        <tr>
            <th>Nama</th>
            <td>{{ $product->name }}</td>
        </tr>
        <tr>
            <th>Harga</th>
            <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Stok</th>
            <td>{{ $product->stock }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $product->description }}</td>
        </tr>
    </table>

    <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
