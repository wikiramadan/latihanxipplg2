@extends('template')
@section('judul_halaman','')
@section('konten')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('buku.update', $buku->id) }}" 
                        method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT') 
                        <div class="form-group">
                            <label class="font-weight-bold">Judul Buku</label>
                            <input type="text" class="form-control @error('judul_buku') is-invalid @enderror" name="judul_buku" value="{{ old('judul_buku', $buku->judul_buku) }}" placeholder="Masukkan Judul Buku">
                            @error('judul_buku')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Penerbit</label>
                            <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" value="{{ old('penerbit', $buku->penerbit ) 
                            }}" placeholder="Masukkan Penerbit">
                             @error('penerbit')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div> 
                    <div class="form-group">
                            <label class="font-weight-bold">Jumlah</label>
                            <input type="text" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ old('jumlah', $buku->jumlah) }}" placeholder="Masukkan Jumlah Buku">
                            @error('jumlah')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                </form> 
            </div>
        </div>
    </div>
</div>
</div>
                
@endsection