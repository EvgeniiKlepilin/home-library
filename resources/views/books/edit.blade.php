@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit a Book</div>

                <div class="card-body">
                    <div class="panel-body">
                        @include('common.errors')
                        <form action="{{ route('books.update', [$book->id]) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="title" class="col-sm-3 control-label">Book Title</label>
                                <div class="col-sm-6">
                                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $book->title) }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-3 control-label">Book Description</label>
                                <div class="col-sm-6">
                                    <textarea name="description" id="description" class="form-control">{{ old('description', $book->description) }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="file" class="col-sm-3 control-label">Upload File</label>
                                <div class="col-sm-6">
                                    <input type="file" name="filename" id="file">
                                </div>
                                @if($book->filename)
                                <div class="col-sm-6">
                                    <i>Uploaded File: <a href="{{ $book->filename }}" target="_blank">{{ $book->filename }}</a></i>
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-edit"></i> Edit Book
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
