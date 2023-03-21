@extends('layout')

@section('content')

    <div class="row">
        @foreach($menus as $menu)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="img_thumbnail">

                    <div class="caption">
                        <h4>{{ $menu->name }}</h4>
                        <p>{{ $menu->body }}</p>
                        <p><strong>Price: </strong> {{ $menu->price }}$</p>
                        <p class="btn-holder"><a href="{{ route('add_to_cart', $menu->id) }}" class="btn btn-success btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
