@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add a Book</div>

                <div class="card-body">
                    <div class="panel-body">
                        @include('common.errors')
                        <form action="/books" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title" class="col-sm-3 control-label">Book Title</label>
                                <div class="col-sm-6">
                                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-3 control-label">Book Description</label>
                                <div class="col-sm-6">
                                    <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="file" class="col-sm-3 control-label">Upload File</label>
                                <div class="col-sm-6">
                                    <input type="file" name="filename" id="file">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-plus"></i> Add Book
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
