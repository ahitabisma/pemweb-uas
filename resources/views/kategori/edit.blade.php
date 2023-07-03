@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="text-center">Edit Kategori</h1>
        </div>
    </div>
    <a href="/">
        <button class="btn btn-primary mt-4">Back</button>
    </a>

    <div class="card mt-3">
        <div class="card-body">

            <form action="/kategori/update/{{ $kategori->id }}" method="POST">
                @csrf
                @method('put')

                <div class="input-group input-group-outline my-3">
                    <input type="text" name="nama_kategori"
                        class="form-control @error('nama_kategori') is-invalid @enderror"
                        value="{{ old('nama_kategori', $kategori->nama_kategori) }}" placeholder="Nama Kategori" required>
                    @error('nama_kategori')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="btn btn-primary" type="submit">Edit</button>
            </form>
        </div>
    </div>
@endsection
