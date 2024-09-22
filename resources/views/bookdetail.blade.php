@extends('navbar')
@section('main')

<h2 class="bg-success bg-gradient text-light">Book Detail</h2>
<div class="bg-dark text-white">
<div class="row g-0 bg-dark text-white position-relative" style="width: 40rem;" >
  <div class="col-md-6 mb-md-0 p-md-4">
    <img height="360px" src="{{ url('/storage/images/' . $x->image) }}" class="w-100" alt="...">
  </div>
  <div class="col-md-6 p-4 ps-md-0">
    <h1 class="mt-0">{{$x->title}}</h1>
    <h4>{{$x->author}}</h4>
    <p>{{$x->synopsis}}</p>
  </div>
</div>
</div>


@endsection