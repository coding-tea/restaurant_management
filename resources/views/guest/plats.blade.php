@extends('layouts.landing_page')
@section('content')
    @isset($plats)
        <div class="plat_container">
            @forelse ($plats as $item)
                <div class="plat_card">
                    <div class="image">
                        <img src="" alt="">
                    </div>
                    <div class="description">
                        <h1 class="title"> {{ $item->intitule }} </h1>
                        <h1 class="price"> {{ $item->prix }} </h1>
                        <p> {{ $item->description }} </p>
                    </div>
                </div>
            @empty
                
            @endforelse
        </div>
    @endisset
@endsection