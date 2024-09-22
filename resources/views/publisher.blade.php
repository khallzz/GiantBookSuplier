@extends('navbar')
@section('main')

<h2 class="bg-success bg-gradient text-light">Book List</h2>
<div class="row">
    @foreach ($publisher as $a)
    <div class="col">
<div class="card bg-dark text-white" style="width: 25rem;">
  <img height="320px" src="{{ url('/storage/images/' . $a->image) }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$a->name}}</h5>
    <p class="card-text">{{$a->adress}}</p>
    <p class="card-text">{{$a->phone}}</p>
    <p class="card-text">{{$a->email}}</p>
    <a href="/publisherdetail/{{ $a->id }}" class="btn btn-secondary">Detail</a>
    </div>
  </div>
</div>
@endforeach
</div>
@endsection