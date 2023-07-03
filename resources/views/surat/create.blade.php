@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="text-center">Tambah Surat</h1>
        </div>
    </div>
    <a href="/">
        <button class="btn btn-primary mt-4">Back</button>
    </a>

    <div class="card mt-3">
        <div class="card-body">

            <form action="/store" method="POST">
                @csrf

                <div class="input-group input-group-outline my-3">
                    <input type="number" name="nomor_surat" class="form-control @error('nomor_surat') is-invalid @enderror"
                        value="{{ old('nomor_surat') }}" placeholder="Nomor Surat" required>
                    @error('nomor_surat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-group input-group-outline my-3">
                    <input type="date" name="tanggal_surat"
                        class="form-control @error('tanggal_surat') is-invalid @enderror"
                        value="{{ old('ntanggal_surat') }}" placeholder="Tanggal Surat" required>
                    @error('tanggal_surat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-group input-group-outline my-3">
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                        value="{{ old('judul') }}" placeholder="Judul Surat" required>
                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-group input-group-outline my-3">
                    <input type="text" name="isi" class="form-control @error('isi') is-invalid @enderror"
                        value="{{ old('isi') }}" placeholder="Isi Surat" required>
                    @error('isi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="input-group input-group-outline my-3">
                    <select class="form-select" name="pengirim_id" placeholder="pengirim">

                        <option value="">-- Pengirim --</option>
                        @foreach ($pengirims as $pengirim)
                            <option value="{{ $pengirim->id }}">{{ $pengirim->nama_pengirim }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group input-group-outline my-3">
                    <select class="form-select" name="penerima_id" placeholder="penerima">

                        <option value="">-- Penerima --</option>
                        @foreach ($penerimas as $penerima)
                            <option value="{{ $penerima->id }}">{{ $penerima->nama_penerima }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group input-group-outline my-3">
                    <select class="form-select" name="kategori_id" placeholder="Kategori">

                        <option value="">-- Kategori --</option>
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>

                <button class="btn btn-primary" type="submit">Create</button>
            </form>
        </div>
    </div>
@endsection
