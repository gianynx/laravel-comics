@extends('layouts.app');

@section('page_title')
    Characters
@endsection

@section('content')
    <div class="bg-light">
        <h1>{{ $comic['title'] }}</h1>
        <p>{{ $comic['description'] }}</p>
    </div>
@endsection
