@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="text-center">Penerima Surat</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/penerima/create">
                <button class="btn btn-primary mt-4">Insert</button>
            </a>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    <span>{{ session('success') }} </span>
                </div>
            @endif
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Penerima</th>
                        <th>Alamat Penerima</th>
                        <th>Telepon Penerima</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penerimas as $penerima)
                        <tr>
                            <td>
                                <p>{{ $penerima->id }}</p>
                            </td>
                            <td>
                                <p>{{ $penerima->nama_penerima }}</p>
                            </td>
                            <td>
                                <p>{{ $penerima->alamat_penerima }}</p>
                            </td>
                            <td>
                                <p>{{ $penerima->telepon_penerima }}</p>
                            </td>
                            <td>
                                <a href="/penerima/edit/{{ $penerima->id }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="/penerima/destroy/{{ $penerima->id }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="border-0" onclick="return confirm('Hapus data?')"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tfoot>
            </table>
        </div>
    </div>
@endsection
