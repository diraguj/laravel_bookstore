@extends('books.layout')
@section('content')
<div class="wrapperdiv">

@if($messge = Session::get('success'))
<div class="alert alert-success text-center">{{ $messge }}</div>
@endif

<!-- @if($books)
  @foreach($books as $checkbook)
    <div class="alert alert-success text-center">{{ $checkbook}}</div>

    @endforeach
@endif -->
<!-- 
@if(count($books))

    @foreach($books as $value)
    <div class="alert alert-success text-center">{{ $value->name}}</div>
      
    @endforeach
@endif -->
@forelse($books as $value)
@empty
    <script>window.location = "/books/create";</script>    
@endforelse


<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Title</th>
      <th scope="col">Genre</th>
      <th scope="col"> Author</th>
      <th scope="col"> Price</th>

      <th scope="col"></th>
    </tr>
  </thead>
  @if($books)
  <tbody>
      @foreach($books as $book)
    <tr>
      <td class="align-middle"><img src="{{ asset('uploads/'.$book->poster ) }} " class="img-thumbnail" /></td>
      <td class="align-middle">{{ $book->title }}</td>
      <td class="align-middle">{{ $book->genre }}</td>
      <td class="align-middle">{{ $book->author }}</td>
      <td class="align-middle">{{ $book->price }}</td>

      <td class="align-middle">
        <form action="{{ route('books.destroy', $book->id) }}" method="post">
        <a href="{{ route('books.show', $book->id)}} " class="btn btn-info">Show</a>
        <a href="{{ route('books.edit', $book->id)}}" class="btn btn-primary">Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to delete book?')">Delete</button>
        </form>
      </td>

    </tr>
    @endforeach
  </tbody>
  @endif
</table>

<div class="d-flex">
    <div class="mx-auto">
        {!! $books->links() !!}
    </div>
</div>
</div>
@endsection