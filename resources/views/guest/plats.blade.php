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
                            @php $numStar = 1; @endphp
                            @if (count($item->commandes) >= 100)
                            @php
                                $numStar = 5;
                            @endphp
                            @elseif(count($item->commandes) <= 100 && count($item->commandes) >= 50)
                            @php
                                $numStar = 4;
                            @endphp
                            @elseif(count($item->commandes) <= 50 && count($item->commandes) >= 20)
                            @php
                                $numStar = 3;
                            @endphp
                            @elseif(count($item->commandes) > 4)
                            @php
                                $numStar = 2;
                            @endphp
                            @elseif(count($item->commandes) <= 4)
                            @php
                                $numStar = 1;
                            @endphp
                            @endif

                            @for ($i = 0; $i < $numStar ; $i++)
                                <img class="star" src="{{ asset('images/star.png') }}" alt="star">
                            @endfor
                        </div>
                    </div>
                </div>
            @empty
                
            @endforelse
        </div>
    @endisset
@endsection