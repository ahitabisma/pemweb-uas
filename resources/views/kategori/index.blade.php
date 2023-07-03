@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="text-center">Kategori Surat</h1>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategoris as $kategori)
                        <tr>
                            <td>
                                <p>{{ $kategori->id }}</p>
                            </td>
                            <td>
                                <p>{{ $kategori->nama_kategori }}</p>
                            </td>
                        </tr>
                    @endforeach

                    </tfoot>
            </table>
        </div>
    </div>
@endsection
