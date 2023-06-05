@php
    $links = [
        ['title' => 'digital comics', 'img' => '/images/buy-comics-digital-comics.png'],
        [
            'title' => 'dc merchandise',
            'img' => '/images/buy-comics-merchandise.png',
        ],
        [
            'title' => 'subscription',
            'img' => '/images/buy-comics-subscriptions.png',
        ],
        [
            'title' => 'comic shop locator',
            'img' => '/images/buy-comics-shop-locator.png',
        ],
        [
            'title' => 'dc power visa',
            'img' => '/images/buy-dc-power-visa.svg',
        ],
    ];
@endphp

@extends('layouts.app')

@section('content')
    <div class="jumbo">
        <button class="series">CURRENT SERIES</button>
    </div>
    <div class="bg-dark">
        <div class="container ">
            <div class="row row-cols-1 row-cols-sm-3 row-cols-md-6">
                @foreach ($comics as $comic)
                    <div class="col pt-5 pb-5 position-relative">
                        <div class="text-center">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                        <h5 class="text-white text-center mt-2"><a
                                href="{{ route('comics.show', $comic->id) }}">{{ $comic['title'] }}</a></h5>
                        <div class=" position-absolute bottom-0 text-center">
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Modifica</a>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button btn btn-danger m-0 ms-3" data-item-title="{{ $comic->title }}">Cancella</button>
                            </form>
                        </div>


                    </div>
                @endforeach

                <div class="w-100 d-flex justify-content-center pt-4">
                    <button><a href="{{ route('comics.create')}}">AGGIUNGI</a></button>
                </div>
            </div>

        </div>
    </div>
    <div class="d-flex align-items-center" id="pop-up">
        <div class="container ps-5 pe-5">
            <ul class="d-flex justify-content-between text-uppercase mb-0">
                @foreach ($links as $link)
                    <li class="d-flex align-items-center">
                        <a href="">
                            <img src="{{ $link['img'] }}" alt="">
                            <span>{{ $link['title'] }}</span>
                        </a>

                    </li>
                @endforeach

            </ul>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteModalLabel">ATTENZIONE</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Confermi di voler eliminare <span id="modal-item-title"></span>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                <button type="button" class="btn btn-primary">Elimina</button>
            </div>
        </div>
    </div>
</div>
@endsection
