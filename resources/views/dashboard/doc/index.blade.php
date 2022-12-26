@extends('dashboard.layout.main')

@section('abc')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Dokumen</h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

    <div class="table-responsive col-lg-10">
      <a href="/document/create" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> </a>
        <table class="table table-striped table-sm">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">ID Dokumen</th>
              <th scope="col">Nama Dokumen</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $p)
            <tr>
              <td>{{ $loop -> iteration }}</td>
              <td>{{ $p -> id_dokumen}}</td>
              <td>{{ $p -> nama_dokumen}}</td>
              <td>
                @if ($p -> status == 'dipinjam')
                    <label class="badge btn-danger">Di Pinjam</label>
                @elseif ($p -> status == 'tersedia')
                    <label class="badge btn-success">Tersedia</label>
                @endif
              </td>
              <td>
                <form action="/document/{{ $p->id_dokumen }}/edit" method="get" class="d-inline">
                    <button class="badge bg-warning border-0"><i class="fa fa-edit"></i></button>
                </form>
                  <form action="/document/{{ $p->id_dokumen }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Mau Menghapus Data?')"><i class="fa fa-trash-alt"></i></button>
                  </form>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
    <div class="mb-3">
        {{ $posts->links('pagination::bootstrap-5') }}
    </div>

@endsection
