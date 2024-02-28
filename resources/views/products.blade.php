@extends('shop')

@section('content')
    
<div class="row">
    @foreach ($menu as $menus)
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
               <img src="{{asset('images')}}/{{ $menus->image}}" class="card-img-top">
            </div>
            <div class="card-body">
                <h2 class="card-title text-center" style="width: 300px;">{{$menus->name}}</h2>
                <p class="card-text text-center">{{$menus->description}}</p>
                <p class="card-text text-center"><strong>price</strong>₱
{{$menus->price}}</p>
            </div>
        </div>
    @endforeach
</div>

@endsection