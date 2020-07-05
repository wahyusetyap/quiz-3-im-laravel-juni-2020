@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-8 mx-auto">
        <h3>Desain ERD</h3>
        <img src="{{url('images/ERD.png')}}" alt="ERD" width="100%">
        <a href="/artikel" class="btn btn-success btn-lg my-2">Lihat Artikel</a>
    </div>
</div>
@endsection