@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-10 mx-auto">
  <div class="card" style="width: 100%;">in
      <div class="card-body">
        <h2 class="card-title">{{$content->judul}}</h2>
        <h6 class="card-subtitle mb-3 text-muted">slug:{{$content->slug}}</h6>
        <p class="card-text">{{$content->isi}}</p>
        <div class="d-flex justify-content-end">
          <a href="/artikel" class="btn btn-success">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection