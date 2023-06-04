@extends('layouts.landing_page')
@section('content')
    @isset($plats)
        <div class="header" style="background-image: url('{{ asset($plats[0]->categorie->photo) }}')"></div>
        <div class="plat_container">
            @forelse ($plats as $item)
                <div class="plat_card">
                    <div class="image" style="width: 30%">
                        <img src="{{ (isset($item->photo))?asset($item->photo):asset('images/default.jpg') }}" alt="">
                    </div>
                    <div class="description">
                        <h1 class="title"> {{ $item->intitule }} </h1>
                        <h1 class="price"> {{ $item->prix }} </h1>
                        <p> {{ $item->description }} </p>
                        <div class="stars">
                            ({{ count($item->commandes) }}) 
                            @if (count($item->commandes) >= 100)
                                <img class="star" src="{{ asset('images/star.png') }}" alt="star">
                                <img class="star" src="{{ asset('images/star.png') }}" alt="star">
                                <img class="star" src="{{ asset('images/star.png') }}" alt="star">
                                <img class="star" src="{{ asset('images/star.png') }}" alt="star">
                                <img class="star" src="{{ asset('images/star.png') }}" alt="star">

                            @elseif(count($item->commandes) <= 100 && count($item->commandes) >= 50)
                                <img class="star" src="{{ asset('images/star.png') }}" alt="star">
                                <img class="star" src="{{ asset('images/star.png') }}" alt="star">
                                <img class="star" src="{{ asset('images/star.png') }}" alt="star">
                                <img class="star" src="{{ asset('images/star.png') }}" alt="star">
                            @elseif(count($item->commandes) <= 50 && count($item->commandes) >= 20)
                                <img class="star" src="{{ asset('images/star.png') }}" alt="star">
                                <img class="star" src="{{ asset('images/star.png') }}" alt="star">
                                <img class="star" src="{{ asset('images/star.png') }}" alt="star">
                            @elseif(count($item->commandes) > 4)
                                <img class="star" src="{{ asset('images/star.png') }}" alt="star">
                                <img class="star" src="{{ asset('images/star.png') }}" alt="star">
                            @elseif(count($item->commandes) <= 4)
                                <img class="star" src="{{ asset('images/star.png') }}" alt="star">
                            @else
                                <img class="star" src="{{ asset('images/star.png') }}" alt="star">
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                
            @endforelse
        </div>
    @endisset
@endsection