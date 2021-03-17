@extends('books.layout')
@section('content')
<div class="wrapperdiv">
    @if($book)
<div class="row pb-5">
    <div class="col-4"></div>
    <div class="col-4">
    <div class="card" style="width: 20rem;">
        <img src="{{ asset('uploads/'.$book->poster ) }}" class="card-img-top">
        <div class="card-body">
        <h5 class="card-title">Title Name - {{ $book->title }}</h5>
        <p class="card-text">Genre is -  {{ $book->genre }} </p>
        <p class="card-text">Author By - {{ $book->author }}</p>

        <h5 class="card-title">Price is {{ $book->price }}</h5>

        </div>
        <div class="back_btn">
            <a class="btn btn-primary btn-lg btn-block  " href="{{ route('books.index') }}" role="button">Back </a>
        </div>
            
        </div>
        </div>
    </div>
    <div class="col-4"></div>
</div>
    @endif
</div>
@endsection