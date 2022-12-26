@extends('dashboard.layout.main')

@section('abc')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Dokumen</h1>
</div>
<a href="/dokumen" class="btn btn-primary mb-3"><i class="fa fa-arrow-left"></i> Back</a>
<div class="card-header"><b>-</b></div>
<div class="card card-primary card-outline">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-body table-responsive p-0 col-lg-10">
                    <div class="col-lg-8">
                        <form method="post" action="/document" class="mb-5">
                            @csrf
                            <div class="col-lg-9">
                                <table class="table table-sm table-hover m-0 mb-3">
                                    <tbody>
                                        <div class="mb-3">
                                            <tr>
                                                <td class="text-muted" >ID Dokumen</td>
                                                <td>
                                                <input type="id_dokumen" class="form-control @error('id_dokumen') is-invalid @enderror" id="id_dokumen" name="id_dokumen" required autofocus value="{{ old('id_dokumen') }}">
                                                    @error('id_dokumen')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted" >Nama Dokumen</td>
                                                <td>
                                                <input type="nama_dokumen" class="form-control @error('nama_dokumen') is-invalid @enderror" id="nama_dokumen" name="nama_dokumen" required autofocus value="{{ old('nama_dokumen') }}">
                                                    @error('nama_dokumen')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted" >Status</td>
                                                <td>
                                                <select name="status" class="form-control" value="{{ $z }}">
                                                    <option selected disabled>-- Pilih --</option>
                                                @if(old('status') == $z )
                                                    <option value="dipinjam" selected>Di Pinjam</option>
                                                    <option value="tersedia" selected>Tersedia</option>
                                                @else
                                                    <option value="dipinjam">Di Pinjam</option>
                                                    <option value="tersedia">Tersedia</option>
                                                @endif
                                                </select>
                                                </td>
                                            </tr>
                                        </div>
                                    </tbody>
                                </table>
                            </div>
                          <button type="submit" class="btn btn-outline-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function myFunction(){
        var show = document.getElementById("password");
        if(show.type=='password'){
            show.type='text';
        }else{
            show.type='password'
        }
    }
</script>
@endsection
