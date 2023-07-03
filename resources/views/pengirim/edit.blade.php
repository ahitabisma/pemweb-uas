@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="text-center">Edit Pengirim</h1>
        </div>
    </div>
    <a href="/">
        <button class="btn btn-primary mt-4">Back</button>
    </a>

    <div class="card mt-3">
        <div class="card-body">

            <form action="/pengirim/update/{{ $pengirim->id }}" method="POST">
                @csrf
                @method('put')

                <div class="input-group input-group-outline my-3">
                    <input type="text" name="nama_pengirim"
                        class="form-control @error('nama_pengirim') is-invalid @enderror"
                        value="{{ old('nama_pengirim', $pengirim->nama_pengirim) }}" placeholder="Nomor Pengirim" required>
                    @error('nama_pengirim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group input-group-outline my-3">
                    <input type="text" name="alamat_pengirim"
                        class="form-control @error('alamat_pengirim') is-invalid @enderror"
                        value="{{ old('alamat_pengirim', $pengirim->alamat_pengirim) }}" placeholder="Nomor Pengirim"
                        required>
                    @error('alamat_pengirim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group input-group-outline my-3">
                    <input type="number" name="telepon_pengirim"
                        class="form-control @error('telepon_pengirim') is-invalid @enderror"
                        value="{{ old('telepon_pengirim', $pengirim->telepon_pengirim) }}" placeholder="Nomor Pengirim"
                        required>
                    @error('telepon_pengirim')
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
