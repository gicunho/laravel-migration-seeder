@extends('layout.app')

@section('content')
    <div class="voyages">
        @foreach ($voyages as $voyage)
        <a href="{{route('voyages.show', $voyage->id)}}">
            <div class="voyage">
                <img src="{{$voyage->image}}" alt="">
                <h2>{{$voyage->country}}</h2>
                <h4>{{$voyage->hotel}} Hotel - {{$voyage->stars}} stelle</h4>
            </div>
        </a>

    @endforeach
    </div>

@endsection