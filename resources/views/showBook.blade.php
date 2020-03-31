
@extends('layout/booklayout')

@section('mahmoud')

<a href="{{url('books')}}">All Books</a>
<h2>{{$book->name}}</h2>
<p>{{$book->desc}}</p>


@endsection









