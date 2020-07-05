@extends('layouts.master')

@section('content')

<form action="/artikel/{{$content->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="judul">Judul</label>
    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul" value="{{$content->judul}}">
    </div>
    <div class="form-group">
      <label for="isi">Artikel</label><br>
      <textarea class="form-control" name="isi" id="isi" rows="20">{{$content->isi}}</textarea>
    </div>
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary btn-lg mr-1">Simpan</button>
        <a href="/artikel" class="btn btn-danger btn-lg">Batal</a>
    </div>
</form>
@endsection