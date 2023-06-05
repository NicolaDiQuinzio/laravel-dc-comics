@extends('layouts.app')

@section('content')
    
        <section class="container bg-primary">
            <h1>Cerca un nuovo fumetto</h1>
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">titolo</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                        id="title" value="{{ old('title') }}" required min="3" maxlength="255"
                        aria-describedby="titleHelp">
                    <div id="titleHelp" class="form-text">Inserisci un titolo</div>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Image Link</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                        id="thumb" value="{{ old('thumb') }}" required aria-describedby="thumbHelp">
                    <div id="thumbHelp" class="form-text">Inserisci un immagine</div>
                    @error('thumb')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="price" id="price" value="{{ old('price')}}" required aria-describedby="priceHelp">
                    <div id="priceHelp" class="form-text">Inserisci un prezzo</div>
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series"
                    value="{{ old('series')}}" required aria-describedby="seriesHelp" maxlength="255">
                    <div id="seriesHelp" class="form-text">Inserisci una serie</div>
                    @error('series')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Date of Sale</label>
                    <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" value="{{ old('sale_date')}}" required aria-describedby="saleDateHelp">
                    <div id="saleDatesHelp" class="form-text">Inserisci la data di vendita</div>
                    @error('sale_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" value="{{ old('type')}}" required aria-describedby="typeHelp">
                    <div id="typeHelp" class="form-text">Inserisci il tipo</div>
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" value="{{ old('description')}}" aria-describedby="descriptionHelp" style="height: 100px"></textarea>
                    <div id="descriptionHelp" class="form-text">Inserisci una descrizione</div>
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
</section>
@endsection
