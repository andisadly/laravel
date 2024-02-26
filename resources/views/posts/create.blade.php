@extends('layouts.app')
@section('title', 'Buat Postingan')
@section('content')
    <div class="container">
        <h1>Buat Postingan Baru</h1>

        <form action="{{ url('posts') }}" method="POST" class="form-control">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" rows="3" name="content"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection
