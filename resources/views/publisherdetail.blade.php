@extends('navbar')
@section('main')


<div class = "bg-success bg-gradient text-light">
    <h4 > Publisher : {{$publisher->name}}</h5>
    <h4 > Adress    : {{$publisher->adress}}</h5>
    <h4 > Phone     : {{$publisher->phone}}</h5>
    <h4 > Email     : {{$publisher->email}}</h5>
    </div>

<div class="row">
    @foreach ($publisher->books as $x)
    <div class="col">
<div class="card bg-dark text-white" style="width: 18rem;">
  <img height="360px" src="{{ url('/storage/images/' . $x->image) }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$x->title}}</h5>
    <p>by</p>
    <p class="card-text">{{$x->author}}</p>
    <a href="/bookdetail/{{ $x->id }}" class="btn btn-secondary">Detail</a>
    </div>
  </div>
</div>
@endforeach
@endsection