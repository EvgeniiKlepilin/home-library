@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Library</h3>
                    <a href="{{ route('books.create') }}" class="btn btn-light">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (count($books) > 0)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Available Books
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped book-table">
                                    <thead>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($books as $book)
                                            <tr>
                                                <td class="table-text">
                                                    <div>{{ $book->title }}</div>
                                                </td>
                                                <td class="table-text">
                                                    <div>{{ $book->description }}</div>
                                                </td>
                                                <td class="table-text">
                                                    <div>
                                                        <a href="{{ $book->filename }}" target="_blank"><i class="fa fa-book"></i></a>
                                                        <a href="{{ route('books.edit', ['book' => $book->id]) }}"><i class="fa fa-edit"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @else
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                No Books Yet
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
