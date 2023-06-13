@extends('layouts.dashboard')
@section('content')

    @isset($categories)
    <div class="container_menu">
    @forelse ($categories as $item)
    <a href="{{ route('dashboard.categorie.show', $item->id) }}">
        <div class="dashboard_menu {{ isset($categorie) && $categorie->id == $item->id?'categorie_active':'' }}">
            <img src="{{ asset($item->photo) }}" alt="{{ $item->titre }}" style="width: 100px;height: 100px; margin-bottom: 5px; border-radius: 10px;">
            <h1 class="dashboard_title">{{ $item->titre }}</h1>
            
        </div>
    </a>
    @empty
        <div class="empty">empty</div>
    @endforelse
    </div>
    @endisset

    @isset($plats)
    <div class="plats_menu container_menu">
    @foreach ($plats as $item)
        <div class="dashboard_plat">
            <img src="{{ (isset($item->photo))?asset($item->photo):asset('images/default.jpg') }}" alt="">
            <h1 class="title"> {{ $item->intitule }} </h1>
            <h1 class="price"> {{ $item->prix }} </h1>
        </div>
    @endforeach
    </div>
    @endisset

@endsection