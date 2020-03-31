@extends('layout/booklayout')

@section('mahmoud')
@foreach($books as $book)

<h2>{{$book->name}}</h2>
<p>{{$book->desc}}</p>
<h1 ><a href="{{url('books/show',$book->id)}}">{{$book->name}}</a></h1>

<hr>

@endforeach





@endsection








