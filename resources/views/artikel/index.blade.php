@extends('layouts.master')

@section('content')
<div class="d-flex justify-content-end mx-auto mb-3" style="width:70%">
    <a href="/artikel/create" class="btn btn-success btn-lg">+Tambah Artikel</a>
</div>
@foreach ($articles as $article)
<div class="card mx-auto my-2" style="width: 70%;">
    <div class="card-body">
        <div class="card-title">
            <h3>{{$article->judul}}</h5>
            <small>slug: {{$article->slug}}</small>
        </div>
        {{-- <p class="card-text">{{$article->isi}}</p> --}}
        <div class="d-flex justify-content-end">
            <a href="/artikel/{{$article->id}}" class="btn btn-success mr-3">Baca</a>
            <a href="/artikel/{{$article->id}}/edit" class="btn btn-primary mr-1">Sunting</a>
            <form action="/artikel/{{$article->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
  </div>
@endforeach
@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush