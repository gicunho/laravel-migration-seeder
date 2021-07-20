@extends('layout.app')

@section('content')
    <div class="voyages">
        @foreach ($voyages as $voyage)
            <div class="voyage">
                <img width="400" src="{{$voyage->image}}" alt="">
                <h2>{{$voyage->country}}</h2>
                <h4>{{$voyage->hotel}} Hotel - {{$voyage->stars}} stelle</h4>
                <h4>{{$voyage->duration}} giorni - € {{$voyage->price}}</h4>
                <a href="{{route('voyages.show', $voyage->id)}}">Dettagli</a>
            </div>
        

    @endforeach
    </div>

@endsection