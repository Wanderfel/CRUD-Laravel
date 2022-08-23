@extends('books.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Book</div>
  <div class="card-body">
       
      <form action="{{ url('book/' .$editObject['books']->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$editObject['books']->id}}" id="id" />

        <label>Author</label></br>
            <select class="form-select" id="id_author" name="id_author" aria-label="Default select example">
                <option selected>Open this select menu</option>
                @foreach($editObject['authors'] as $item)
                <option value="{{$item->id}}" {{$editObject['books']->id_author == $item->id ? 'selected' : '' }}>{{$item->name}}</option>

                @endforeach
            </select>

        <label>Title</label></br>
        <input type="text" name="title" id="title" value="{{$editObject['books']->title}}" class="form-control"></br>

        <label>Edition</label></br>
        <input type="text" name="edition" id="edition" value="{{$editObject['books']->edition}}" class="form-control"></br>

        <label>Synopsis</label></br>
        <input type="text" name="synopsis" id="synopsis" value="{{$editObject['books']->synopsis}}" class="form-control"></br>

        <label>Pages</label></br>
        <input type="text" name="pages" id="pages" value="{{$editObject['books']->pages}}" class="form-control"></br>

        <label>Price</label></br>
        <input type="text" name="price" id="price" value="{{$editObject['books']->price}}" class="form-control"></br>


        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop