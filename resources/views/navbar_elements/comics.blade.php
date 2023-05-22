@extends('layouts.app')

@section('page_title')
    Comics
@endsection

@section('content')
    <section class="container">
        <div class="row pt-5 pb-5">
            @foreach ($comics as $comic)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-image h-100">
                                <a href="#"><img class="img-fluid h-100" src="{{ $comic['thumb'] }}"
                                        alt="{{ $comic['title'] }}">
                                </a>
                            </div>
                            <div class="card-title text-uppercase fw-bold small text-white pt-3">
                                <a href="#" class="text-decoration-none text-white">{{ $comic['series'] }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="text-center py-3 mt-5">
                <button class="btn btn-primary rounded-0 text-white fw-bold text-uppercase px-5">load more</button>
            </div>
        </div>
    </section>
@endsection
