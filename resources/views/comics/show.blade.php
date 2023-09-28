@extends('layouts.app')

@section('page_title')
    {{ $comic['series'] }}
@endsection

@section('content')
    <div class="bg-light p-5">
        <h1>{{ $comic['title'] }}</h1>
        <p>{{ $comic['description'] }}</p>
    </div>
@endsection
