@extends('books.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>CRUD</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/book/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Author</th>
                                        <th>Title</th>
                                        <th>Edition</th>
                                        <th>Synopsis</th>
                                        <th>Pages</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($books as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->author()}}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->edition }}</td>
                                        <td>{{ $item->synopsis }}</td>
                                        <td>{{ $item->pages }}</td>
                                        <td>{{ $item->price }}</td>
  
                                        <td>
                                            <a href="{{ url('/book/' . $item->id) }}" title="View Book"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                            <a href="{{ url('/book/' . $item->id . '/edit') }}" title="Edit Book"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <!-- <form method="POST" action="{{ url('/book' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Book" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form> -->
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection