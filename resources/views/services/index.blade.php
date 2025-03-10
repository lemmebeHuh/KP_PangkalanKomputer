@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ route('services.index') }}" method="GET" class="mb-4">
    <input type="text" name="search" placeholder="Cari jasa..." value="{{ request('search') }}" class="form-control">
    <button type="submit" class="btn btn-primary mt-2">Cari</button>
</form>

    <h2>Daftar Jasa</h2>
    <a href="{{ route('services.create') }}" class="btn btn-primary mb-3">Tambah Jasa</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
            <tr>
                <td>{{ $service->name }}</td>
                <td>Rp {{ number_format($service->price, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('services.show', $service->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus jasa ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
