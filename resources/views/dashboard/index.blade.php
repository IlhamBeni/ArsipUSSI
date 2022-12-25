@extends('dashboard.layout.main')

@section('abc')

<div class="container-fluid">
    <div class="row border-bottom">
        <div class="col-12 col-sm-6 col-md-3 mt-3 mb-3">
            <b class="h2">Arsip</b>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mt-3" style="width: 230px;">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-file"></i></span>

                    <div class="info-box-content" >
                      <span class="info-box-text">Jumlah Dokumen</span>
                      <span class="info-box-number">
                        100
                      </span>
                    </div>
              </div>
        </div>
    </div>
</div>

@endsection
