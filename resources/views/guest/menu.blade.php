@extends('layouts.landing_page')
@section('content')

    @isset($categorie)
    <div class="container">
    @forelse ($categorie as $item)
        <div class="card-menu">
            <div class="card_header">
                <img src="{{ asset($item->photo) }}" alt="{{ $item->titre }}">
            </div>
            <div class="card_body" style="margin-bottom: 15px">
                <h1> {{ $item->titre }} </h1>
            </div>
            <div class="card_cta">
                <button type="button" class="cta">
                    <a href="{{ route('categorie-plats', $item->id) }}">Discover {{ count($item->plats) }} plats</a>
                </button>
            </div>
        </div>
    @empty
        <div class="empty">empty</div>
    @endforelse
    </div>
    @endisset

@endsection