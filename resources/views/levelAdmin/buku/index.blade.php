@extends('dashboard.app')
@section('content')
<div class="section-header">
    <h1>Buku</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div>

<div class="section-body">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.buku.create') }}" class="btn btn-md btn-success mb-3">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Edisi</th>
                        <th>Tahun</th>
                        <th>Lokasi</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($buku as $index => $dt_buku)
                    <tr>
                        <td class="text-center">
                            {{ ++$index }}
                        </td>
                        <td>{{$dt_buku->judul}}</td>
                        <td>{{$dt_buku->nama_penulis}}</td>
                        <td>{{$dt_buku->penerbit}}</td>
                        <td>{{$dt_buku->edisi}}</td>
                        <td>{{$dt_buku->tahun}}</td>
                        <td>{{$dt_buku->lokasi}}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.buku.destroy', $dt_buku->no_buku) }}" method="POST">
                                <a href="{{ route('admin.buku.show', $dt_buku->no_buku)}}" class="btn btn-primary">Detail</a>
                                <a href="{{ route('admin.buku.edit', $dt_buku->no_buku) }}" class="btn btn-info">Ubah</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-info">
                        <strong>Data belum ada</strong>
                    </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection