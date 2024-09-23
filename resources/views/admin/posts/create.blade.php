@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h1>Crea un nuovo post</h1>
    <form action="{{ route('admin.posts.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="start_date" class="form-label">Data di Inizio</label>
            <input type="text" class="form-control" id="start_date" name="start_date">
        </div>
        <div class="mb-3">
            <label for="end_date" class="form-label">Data di Fine</label>
            <input type="text" class="form-control" id="end_date" name="end_date">
        </div>
        <div class="mb-3">
            <label for="collaborators" class="form-label">Collaboratori</label>
            <input type="text" class="form-control" id="collaborators" name="collaborators">
        </div>
        <div class="mb-3">
            <label for="argument" class="form-label">Contenuto</label>
            <textarea class="form-control" name="argument" id="argument" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
    </div>
@endsection