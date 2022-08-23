@extends('books.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Create New Books</div>
    <div class="card-body">

        <form action="{{ url('book') }}" method="post">
            {!! csrf_field() !!}

            <label>Author</label></br>
            <select class="form-select" id="id_author" name="id_author" aria-label="Default select example">
                <option selected>Open this select menu</option>
                @foreach($authors as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>

                @endforeach
            </select>

            <label>Title</label></br>
            <input type="text" name="title" id="title" class="form-control"></br>

            <label>Edition</label></br>
            <input type="text" name="edition" id="edition" class="form-control"></br>

            <label>Synopsis</label></br>
            <input type="text" name="synopsis" id="synopsis" class="form-control"></br>

            <label>Pages</label></br>
            <input type="text" name="pages" id="pages" class="form-control"></br>

            <label>Price</label></br>
            <input type="text" name="price" id="price" class="form-control"></br>

            <input type="submit" value="Save" class="btn btn-success"></br>

        </form>

    </div>
</div>

@stop