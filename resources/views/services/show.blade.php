@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Jasa</h2>

    <table class="table">
        <tr>
            <th>Nama</th>
            <td>{{ $service->name }}</td>
        </tr>
        <tr>
            <th>Harga</th>
            <td>Rp {{ number_format($service->price, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $service->description }}</td>
        </tr>
    </table>

    <a href="{{ route('services.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
