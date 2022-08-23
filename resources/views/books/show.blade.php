@extends('books.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Books Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Title: {{ $books->title }}</h5>
        <p class="card-text">Author: {{ $books->author()}}</p>
        <p class="card-text">Edition: {{ $books->edition }}</p>
        <p class="card-text">Synopsis: {{ $books->synopsis }}</p>
        <p class="card-text">Pages: {{ $books->pages }}</p>
        <p class="card-text">Price: {{ $books->price }}</p>
  </div>
    </hr>
  </div>
</div>
