@extends('layouts.landing_page')
@section('content')

    @isset($categorie)  
    @forelse ($categorie as $item)
    <div class="container">
        <div class="rounded bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]" style="width: 30%;">
            <a href="#!">
            <img
                class="rounded-t-lg"
                src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg"
                alt="" />
            </a>
            <div class="p-6">
            <h5
                class="mb-2 text-xl font-medium leading-tight text-dark-800">
                {{ $item->titre }}
            </h5>
            <p class="mb-4 text-base text-dark-800">
                Some quick example text to build on the card title and make up the
                bulk of the card's content.
            </p>
            {{-- <button
                type="button"
                class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-dark-800 shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                data-te-ripple-init
                data-te-ripple-color="light">
                Button
            </button> --}}
            </div>
        </div>
    </div>
    @empty
        <div class="empty">empty</div>
    @endforelse  
    @endisset

@endsection