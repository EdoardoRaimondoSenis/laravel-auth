@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
            
        <h1>Dettagli Post</h1>
        <ul>
            <li>Titolo {{ $post->title }}</li>
            <li>Data di Inizio {{ $post->start_date }}</li>
            <li>Data di Fine {{ $post->end_date }}</li>
            <li>Collaboratori {{ $post->collaborators }}</li>
            <li>Argomento {{ $post->argument }}</li>
        </ul>
        <div class="container mb-3">
            <img class="img-fluid" src="{{ asset('storage/' . $post->path_image) }}" alt="{{ $post->image_name }}"><br>
            <span class="mt-3">Nome originale: {{ $post->image_name }}</span>
        </div>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Torna alla lista</a>
    </div>
@endsection