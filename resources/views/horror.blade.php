@extends('navbar')
@section('main')

<h2 class="bg-success bg-gradient text-light">Horror</h2>
<div class="row">
    @foreach ($books as $x)
    <div class="col">
<div class="card bg-dark text-light" style="width: 18rem;">
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
</div>
@endsection

