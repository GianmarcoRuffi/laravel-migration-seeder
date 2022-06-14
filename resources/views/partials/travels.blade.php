@extends('layouts.default');


@section('pageTitle', 'Pacchetti viaggio')
    
@section('mainContent')
@dump($travels)
    
<h1 class="text-center">Vacation Packages</h1>
<div class="row">

@foreach ($travels as $travel)
<div class="col">

<a href="{{route('detail', $travel->id)}}">{{$travel->name}}</a>

</div>
    
@endforeach

</div>


@endsection