@extends('layout/booklayout')

@section('mahmoud')

<form action="{{url('books/store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Book Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Desc</label>
    <input type="text" name="desc" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Add Book</button>
</form>

@endsection


